<?php
    require "models/post.model.php";
    // get id
    $id = $_GET["id"] ? $_GET["id"] : null;
    if (isset($id)):
       $post=getPost($id);
    endif;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (!empty($_POST['title']) and !empty($_POST['description'])) {
            updatePost($_POST['id'],$_POST['title'],$_POST['description']);
            header('location: /post');
        }
    }
    require "View/Post/post.edit.view.php";
?>