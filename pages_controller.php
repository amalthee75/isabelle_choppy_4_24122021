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

    require 'templates/homepage_blog.php';
}


//Doit toujours être en fin de page pour prendre en compte les variables $posts, $post et $comments
