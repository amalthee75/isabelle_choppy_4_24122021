<?php
session_start();
// var_dump($_SESSION);

//1ère étape les modèles src en haut de page
//2ème étape création des variables: post ou comments
//3ème étape mettre le lien de la vue du site "homepage".

//Lien vers le fichier controlleur 
//"homepage_controller.php"
require_once("src/controllers/pages_controller.php");
//Lien vers le fichier controlleur "post_controller.php"
require_once("src/controllers/post_controller.php");
//Lien vers le fichier controller "user_controller.php"
require_once("src/controllers/user_controller.php");
//Lien vers le fichier controller 
//"commentaires"
require_once("src/controllers/comment_controller.php");
//Lien vers le fichier modèle 
//"post_model.php"
require_once("src/post_model.php");
//Lien vers le fichier modèle 
//"user_model.php"
require_once("src/user_model.php");
//Lien vers le ficher modèle "comment_model.php"
require_once("src/comment_model.php");


//connexion de plusieurs applications
function middlewareIsLogin($LaunchFonction)
{
    if (isset($_SESSION['login']) && $_SESSION['login']) {
        $LaunchFonction;
        return true;
    }

    //Errors
    $_SESSION["error"] = "Error, vous n'avez accès à cette page";
    // Redirection vers affichage des posts(URL)
    header("Location: http://localhost/isabelle_choppy_4_24122021/index.php?action=login");

    return false;
}

// variable 'action' existe et non vide
if (isset($_GET['action']) && $_GET['action'] !== '') {
    //---Si $_GET["action] == posts
    if ($_GET['action'] === 'posts') {
        //Lancer la fonction postController_showPost()   
        middlewareIsLogin(postController_showPosts());
    } elseif ($_GET['action'] === 'test') {
        //Lancer la fonction postController_showPost()   
        test();
    }
    //$_GET["action"] == "post"-- Si GET[id] existe,liée à l'id Msql
    elseif ($_GET['action'] === 'post' && isset($_GET['id'])) {
        //Lancer la fonction postController_showOnePost() 
        postController_showOnePost($_GET['id']);
    }
    //Si $_GET["action"] === à "showFormPost"
    elseif ($_GET["action"] === "showFormPost") {
        //Lancer la fonction postController_showFormPost 
        postController_showFormPost();
    }
    //Si $_GET["action"] === à la chaine "modify_Post"
    elseif ($_GET["action"] === "modify_Post" && isset($_GET['id'])) {
        postController_modifyPost($_GET['id']);
    } elseif ($_GET["action"] === "form_modify_Post" && isset($_GET['id'])) {
        postController_showFormModifyPost($_GET['id']);
    }
    //Si $_GET["action"] === à "add_post"
    elseif ($_GET["action"] === "add_post") {
        //Lancer la fonction postController_addPost 
        middlewareIsLogin(postController_addPost());
    }
    //Supprimer un post
    elseif ($_GET["action"] === "cancel_post" && isset($_GET['id'])) {
        postController_cancelPost($_GET['id']);
    }
    //Si $_GET["action"] === "signup"
    elseif ($_GET["action"] === "signup") {
        //Lancer la fonction userController_signupUser()
        userController_signupUser();
    }
    //Si $_GET["action"] === "login"
    elseif ($_GET["action"] === "login") {
        //Lancer la fonction userController_loginUser()
        userController_loginUser();
    } elseif ($_GET["action"] === "logout") {
        //Lancer la fonction userController_loginUser()
        userController_deconnexion();
    } elseif ($_GET["action"] === "dashboard") {
        //Lancer userController_TableauDeBord
        middlewareIsLogin(userController_TableauDeBord());
    } elseif ($_GET["action"] === "signal_Comments" && isset($_GET["comment_id"]) && isset($_GET["post_id"])) {
        //Lancer commentController_signalComments
        middlewareIsLogin(commentController_signalComments($_GET["comment_id"], $_GET["post_id"]));
    } elseif ($_GET["action"] === "add_Comments") {
        //Lancer commentController_addComments
        commentController_addComments();
    } elseif ($_GET["action"] === "cancel_signal_Comments" && isset($_GET["comment_id"])) {
        commentController_cancel_signalComments($_GET["comment_id"]);
    } elseif ($_GET["action"] === "show_Comments") {
        //Lancer commentController_showComment
        middlewareIsLogin(commentController_showComment());
    } elseif ($_GET["action"] === "cancel_Comments" && isset($_GET['comment_id'])) {
        // var_dump($_GET['comment_id']);
        middlewareIsLogin(commentController_deleteComment($_GET['comment_id']));
    } else {
        echo "Erreur 404: La page voulue n'existe pas.";
    }
} else {
    //Retour vers index.php
    pagesController_homepage();
}
