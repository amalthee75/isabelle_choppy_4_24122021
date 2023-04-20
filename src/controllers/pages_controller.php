<?php

//1ère étape les modèles src toujours en haut de page
//2ème étape créer les variables comme post ou comments
//3ème étape une fois que c'est créé on peut ensuite mettre le lien de la vue du site "homepage".
require_once 'src/model.php';
require_once 'src/comment_model.php';
require_once 'src/post_model.php';

function test()
{
    require 'templates/test.php';
}

function pagesController_homepage()
{

    $PostModel = new Post();
    $posts = $PostModel->postModel_getAllPosts();


    // exit();

    // $database = connexion_db();
    // $posts = postModel_getAllPosts($database);
    // var_dump($posts);

    require 'templates/homepage_blog.php';
}

// $posts = getAllPosts();
// // var_dump($posts);

// $post = getOnePost();
// var_dump($post);

// $comments = getAllCommentsByPost();
// var_dump($comments);

// var_dump(getAllCommentsByPost());
// var_dump(getAllPosts());
// var_dump(getOnePost());

//Doit toujours être en fin de page pour prendre en compte les variables $posts, $post et $comments
