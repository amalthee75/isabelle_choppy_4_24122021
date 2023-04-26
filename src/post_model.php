<?php

class Post extends Model
{
    public function postModel_getAllPosts()
    {
        //SQL
        $sql = "SELECT * FROM `items`";

        $request = $this->db->query($sql);

        $items = $request->fetchAll();

        return $items;
    }

    public function postModel_getOnePost($id)
    {
        //SQL
        $sql = "SELECT * FROM `items` WHERE id = $id";

        //Exécuter
        $request = $this->db->query($sql);

        //Récupere les données ou renvoyer un tableau vide
        $item = $request ? $request->fetch() : [];

        //Return
        return $item;
    }

    public function postModel_addPost($data)
    {
        $title = htmlspecialchars($data['title']);
        $content = htmlspecialchars($data['content']);

        if (!empty($title) && !empty($content)) {
            $sql = "INSERT INTO items(title, content, date_creation) VALUES (?, ?, ?)";
            $request = $this->db->prepare($sql);
            $request->execute(array($title, $content, date("Y-m-d H:i:s")));
            $reponse = $this->db->lastInsertId();
            return $reponse;
        } else {
            return false;
        }
    }

    public function postModel_cancelPost($id)
    {
        $request = $this->db->prepare("DELETE FROM items WHERE id=?");
        $reponse = $request->execute(array($id));
        var_dump($reponse);

        return $reponse;
    }

    public function postModel_modifyPost($data, $id)
    {
        //Update
        $title = htmlspecialchars($data['title']);
        $content = htmlspecialchars($data['content']);

        $sql = 'UPDATE items  SET  title = ?, content = ?, date_creation = NOW() WHERE id = ?';
        $update = $this->db->prepare($sql);
        $update->execute(array($title, $content, $id));
        var_dump($update);

        if ($update->rowCount() == 1) {
            var_dump($update->rowCount());
            return true;
        } else {
            return false;
        }
    }
}
