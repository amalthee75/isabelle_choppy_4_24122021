<?php

function commentController_showComment()
{
  // $commentModel->getAllComments();
  // echo 'Tous les commentaires sont affichés' . '<br>';

  // $commentModel->connexion_db();
  $commentModel = new Comment();
  $listComments = $commentModel->getAllComments();

  if (!$listComments) {
    header('Location: http://localhost/isabelle_choppy_4_24122021/index.php');
    exit();
  }

  require_once "templates/comment.php";
}

function commentController_signalComments($comment_id, $post_id)
{
  $database = connexion_db();
  $commentModel = new Comment();
  $signalComment = $commentModel->commentModel_signalComment($comment_id);

  if ($signalComment) {
    header("Location: http://localhost/isabelle_choppy_4_24122021/index.php?action=post&id=" . $post_id);
  }
}

function commentController_cancel_signalComments($comments_id)
{
  $database = connexion_db();
  $commentModel = new Comment();
  $cancel_signalComment = $commentModel->commentModel_cancel_signalComment($comments_id);

  if ($cancel_signalComment) {
    $_SESSION["success"] = "Commentaire désignalé";
  } else {
    $_SESSION["error"] = "Erreur : commentaire";
  }


  header("Location: http://localhost/isabelle_choppy_4_24122021/index.php?action=show_Comments");
}

function commentController_addComments()
{
  //Si la variable $_POST existe et qu'elle n'est pas vide
  if (isset($_POST) && !empty($_POST) && isset($_POST["pseudo"]) && isset($_POST["commentaire"])) {
    if (!empty($_POST["pseudo"]) && !empty($_POST["commentaire"])) {
      var_dump($_POST);
      //Connexion à la base de donnée
      $database = connexion_db();
      $commentModel = new Comment();
      //Appeler le modèle pour rajouter un commentaire
      $comments = $commentModel->commentModel_addNewComment($_POST);

      if ($comments) {
        // var_dump($comments);
        $_SESSION["success"] = "Commentaires ajoutés";
      } else {
        $_SESSION["error"] = "Erreur : commentaire";
      }
    } else {
      $_SESSION["error"] = "Tous les champs doivent être complétés";
    }
  }

  header("Location: http://localhost/isabelle_choppy_4_24122021/index.php?action=post&id=" . $_POST["item_id"]);
}

function commentController_deleteComment($comment_id)
{

  $commentModel = new Comment();
  $suppression = $commentModel->commmentModel_deleteComment($comment_id);

  if (!$suppression) {

    $_SESSION["success"] = "Commentaires supprimés";
  } else {
    $_SESSION["error"] = "Erreur: commentaires non supprimés";
  }

  header("Location: http://localhost/isabelle_choppy_4_24122021/index.php?action=show_Comments");
}
