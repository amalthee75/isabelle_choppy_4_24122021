<?php
//Controle de toutes les fonctions post
function postController_showPosts()
{
    $postsModel = new Post();
    $postsModel->postModel_getAllPosts();
    $_SESSION["success"] = "<p>Voici tous les posts</p>";

    header('Location: http://localhost/isabelle_choppy_4_24122021/templates/homepage_blog.php');
    // $posts = postModel_getAllPosts($database);

}
function postController_showOnePost($id)
{
    //Connexion database
    $postsModel = new Post();
    // $postsModel->postModel_getOnePost($id);

    //Lancer postModel_getOnePost avec $database et $id 
    $item = $postsModel->postModel_getOnePost($id);

    //Si la variable $item est nul
    if (!$item) {
        // Redirection vers l'index.php 
        header('Location: http://localhost/isabelle_choppy_4_24122021/index.php');
        // exits 
        exit();
    }

    $commentModel = new Comment();
    $comments = $commentModel->commentModel_getAllCommentsByPost($item['id']);
    //Lien vers le templates/post.php pour accéder 
    require 'templates/post/post.php';
}

function allFunctions()
{
    echo "<p>Voici toutes les fonctions</p>";
}

function postController_showFormPost()
{
    //Afficher le formulaire
    // require 'templates/post/index.php';
    require 'templates/post/add_post.php';
}

//Ou la fonction est lancée ?
function postController_addPost()
{
    //Si la variable $_POST existe et que cette variable n'est pas vide
    if (isset($_POST) && !empty($_POST) && isset($_POST['title']) && isset($_POST["content"])) {
        var_dump($_POST);
        //Si les names "title" et "content" du formulaire de la page templates/formulaire.php existent

        //ICI on appel le MODELS
        //Connexion a la base de donnée 
        $postsModel = new Post();
        //Créer un post (Model)
        $postId = $postsModel->postModel_addPost($_POST);

        if ($postId) {
            // Return Redirection vers affichage de post (URL)
            var_dump($postId);

            //SUCCESS
            $_SESSION["success"] = "Le post a bien été ajouté";

            header("Location: http://localhost/isabelle_choppy_4_24122021/index.php?action=dashboard");
            return;
        } else {
            //Errors
            $_SESSION["error"] = "Erreur, les champs sont vide !";
            header("Location: http://localhost/isabelle_choppy_4_24122021/index.php?action=showFormPost");
            return;
        }
    }
    //ERROR
    $_SESSION["error"] = "Erreur, pas de formulaire envoyé !";
    header("Location: http://localhost/isabelle_choppy_4_24122021/index.php?action=showFormPost");
}

function postController_showFormModifyPost($id)
{
    $postsModel = new Post();
    $item = $postsModel->postModel_getOnePost($id);

    if ($item) {
        //Afficher le formulaire de modification
        require 'templates/post/modifier_post.php';
    } else {
        //Errors
        $_SESSION["error"] = "Le post n'existe pas";
        header("Location: http://localhost/isabelle_choppy_4_24122021/index.php?action=dashboard");
    }
}

function postController_modifyPost($id)
{
    if (isset($_POST) && !empty($_POST) && isset($_POST['title']) && isset($_POST["content"])) {
        $Post = new Post();
        $post_modify = $Post->postModel_modifyPost($_POST, $id);

        if ($post_modify) {
            var_dump('OK');
            $_SESSION['success'] = "Post mis à jour";
        } else {
            $_SESSION['success'] = "Pas de modification, aucun changement";
        }
        header("Location: http://localhost/isabelle_choppy_4_24122021/index.php?action=form_modify_Post&id=$id");
        return;
    }
    //ERROR
    $_SESSION["error"] = "Erreur, pas de formulaire envoyé !";
    header("Location: http://localhost/isabelle_choppy_4_24122021/index.php?action=dashboard");
}

function postController_cancelPost($id)
{
    $_SESSION["success"] = "post supprimé";

    $Post = new Post();
    $suppression = $Post->postModel_cancelPost($id);


    header("Location: http://localhost/isabelle_choppy_4_24122021/index.php?action=dashboard");
}
