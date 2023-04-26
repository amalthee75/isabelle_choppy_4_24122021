<?php

require_once 'src/model.php';
require_once 'src/user_model.php';

function userController_signupUser()
{
    //Je vérifie si la variable $_POST existe et n'est pas vide
    if (isset($_POST) && !empty($_POST)) {
        $userModel = new User();
        $userModel->usermodel_signup($_POST);
    }
    //[Ce que je lis] : Initialisation de la variable $title avec comme valeur "Signup" -- "A quoi ça sert : Correspond au titre h1 de la page user_form.php"
    $title = "Signup";
    //création de l'url automatique pour poster le formulaire
    $formAction = "http://localhost/isabelle_choppy_4_24122021/index.php?action=signup";

    var_dump($title, $formAction);

    require 'templates/user_form.php';
}

function userController_loginUser()
{
    // $userModel = new User();
    if (isset($_SESSION['login']) && $_SESSION['login']) {
        header("Location: http://localhost/isabelle_choppy_4_24122021/index.php?action=dashboard");
        return true;
    }

    //Si la variable $_post existe et qu'elle n'est pas vide j'execute le code dans la condition
    if (isset($_POST) && !empty($_POST)) {
        $userModel = new User();
        $userIsLogin = $userModel->usermodel_login($_POST);

        // $user
        if ($userIsLogin) {
            //Je suis un user connecté
            echo "User est prêt à être connecté";

            //Enregistre l'utilisateur en session(lire sur la session en php)(email utilisateur)
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['login'] = true;
            var_dump($_SESSION);

            $_SESSION["success"] = "Connexion réussie";
            header("Location: http://localhost/isabelle_choppy_4_24122021/index.php?action=dashboard");
        } else {
            //Si non -> Message d'erreur sur le HTML "Le mot de passe ou(et) l'email est incorrect)
            $_SESSION["error"] = "Le mot de passe et/ou l'email est incorrect";
        }
    }

    $title = "Login";
    $formAction = "http://localhost/isabelle_choppy_4_24122021/index.php?action=login";

    // var_dump($title, $formAction);

    require 'templates/user_form.php';
}
// /Fonction déconnexion

function userController_deconnexion()
{
    $userModel = new User();
    $userModel->usermodel_deconnexion();

    $_SESSION["success"] = "déconnexion de l'utilisateur";
    // if(isset ($_POST['email']) && ($_POST["password"])){
    //     $_POST["email"]="";
    //     $_POST["password"]="";

    // Finalement, on détruit la session.
    session_destroy();
    //Redirection ver login
    header("Location: http://localhost/isabelle_choppy_4_24122021/index.php?action=login");

    // }
}

function userController_TableauDeBord()
{
    $userModel = new Post();
    // if(isset($_SESSION) && isset($_SESSION['login']) && $_SESSION['login'] == true && $_SESSION['email']){

    $database = connexion_db();
    $posts = $userModel->postModel_getAllPosts($database);
    // var_dump($posts);

    require 'templates/tableau_de_bord.php';
    return;
}
