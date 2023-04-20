<?php

class User extends Model
{
    public function usermodel_signup($data)
    {
        $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
        $sql = "INSERT INTO users(email, password) VALUES(?,?)";
        $request = $this->db->prepare($sql);
        $request->execute(array($data['email'], $data['password']));
        var_dump($request);
        $reponse = $this->db->lastInsterId();
        return $reponse;
    }
    public function usermodel_login($data)
    {
        $sql = "SELECT * FROM `users` WHERE `email` = ?";
        $request = $this->db->prepare($sql);
        $request->execute(array($data['email']));
        $User = $request->fetch();

        if ($User) {
            if (password_verify($data['password'], $User['password'])) {
                //Si oui, return true
                return true;
            }
        }
        return false;
    }
    public function usermodel_deconnexion()
    {
        if (isset($_POST['email']) && ($_POST["password"])) {
            $_POST["email"] = "";
            $_POST["password"] = "";
            // Finalement, on détruit la session.
            session_destroy();
            return true;
        }
    }
}

// function usermodel_signup($database, $data)
// {

//Cypter le Mot de passe avant enregistrement
// $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
// Insérer nouveaux emails et mots de passe cryptés dans la base mySql
// $sql = "INSERT INTO users(email, password) VALUES(?,?)";
// Préparer la requête 
// $request = $database->prepare($sql);
//Exécuter la requête avec les 2 éléments email et password
// $request->execute(array($data['email'], $data['password']));

// var_dump($request);
//Retourne le dernier id généré par la dernière requête d'insertion
// $reponse = $database->lastInsertId();

// return $reponse;
// }

//fonction usermodel_login avec les attributs $database et $data
// function usermodel_login($database, $data)
// {
//récupère le name "email" du formulaire dans user_form.php
// $userEmail = $data['email'];
// var_dump($data);

//Sélectionner toute la liste des utilisateurs quand l'email = test@test.fr ($userEmail avec une requete preparée)
// $sql = "SELECT * FROM `users` WHERE `email` = $userEmail";
// $sql = "SELECT * FROM `users` WHERE `email` = ?";

//Exécute une requête sur la base de donnée
// $request = $database->query($sql);
// //Exécuter
// $request->execute();

// Prépare la requête 
// $request = $database->prepare($sql);

//Exécuter et lire dans un tableau l'email 
// $request->execute(array($data['email']));
// var_dump($request);

//Lit les lignes de la requête
// $User = $request->fetch();
// var_dump($User);

//If USER
// if ($User) {
// var_dump($User);
//Vérifier si le MDP et correct
// if (password_verify($data['password'], $User['password'])) {
//Si oui, return true
// return true;
// }
// }
// return false;
// }

//Fonction déconnexion
// 
// function usermodel_deconnexion()
// {
    // if (isset($_POST['email']) && ($_POST["password"])) {
        // $_POST["email"] = "";
        // $_POST["password"] = "";
        // Finalement, on détruit la session.
        // session_destroy();
        // return true;
    // }
// }
