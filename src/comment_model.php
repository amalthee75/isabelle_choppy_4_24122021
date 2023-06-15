<?php

class Comment extends Model
{
   public function commentModel_getAllCommentsByPost($item_id)
   {
      $sql = "SELECT * FROM `comments` WHERE items_id = ?";
      $request = $this->db->prepare($sql);
      $request->execute(array($item_id));
      // $comments = $request->fetchAll();
      //récupère les données ou renvoyer un tableau vide
      $comment = $request ? $request->fetchAll() : [];
      return $comment;
   }
   public function getAllComments()
   {
      $sql = "SELECT * FROM `comments` ORDER BY signaler DESC";
      $request = $this->db->query($sql);
      $comments = $request->fetchAll();
      return $comments;
   }
   public function commentModel_addNewComment($data)
   {
      $request = $this->db->prepare('INSERT INTO comments(pseudo, commentaire, items_id) VALUES(?, ?, ?)');
      $request->execute(array($data['pseudo'], $data['commentaire'], $data["item_id"]));
      $reponse = $this->db->lastInsertId();
      // var_dump($reponse);
      return $reponse;
   }
   public function commentModel_getOneComment($comment_id)
   {
      //SQL
      $sql = 'SELECT * FROM comments WHERE id = ?';
      //Preparer la request
      $request = $this->db->prepare($sql);
      //Exécuter
      $request->execute(array($comment_id));
      //Récupere les données
      $comment = $request->fetch();
      //  var_dump($comment);
      //Return
      return $comment;
   }
   public function commentModel_signalComment($comment_id)
   {
      //Id du commentaire
      $sql = "UPDATE comments SET signaler = 1 WHERE id = ?";
      $request = $this->db->prepare($sql);
      $request->execute(array($comment_id));
      var_dump($request);

      if ($request->rowCount() == 1) {
         $_SESSION["success"] = "on passe de 0 à 1";
         return true;
      } else {
         $_SESSION["error"] = "On reste en l'état";
         return false;
      }
   }
   public function commentModel_cancel_signalComment($comment_id)
   {
      //Id du commentaire
      $sql = "UPDATE comments SET signaler = 0 WHERE id = ?";
      $request = $this->db->prepare($sql);
      $request->execute(array($comment_id));

      if ($request->rowCount() == 1) {
         $request = 0;
         return true;
      } else {
         $request = 1;
         $_SESSION["error"] = "Message supprimé";
         return false;
      }
   }
   public function commmentModel_deleteComment($comment_id)
   {
      $sql = "DELETE FROM comments WHERE id = ?";
      $request = $this->db->prepare($sql);
      $reponse = $request->execute(array($comment_id));

      if ($request->rowCount() == 0) {
         return true;
      } else {
         return false;
      }
   }
}
