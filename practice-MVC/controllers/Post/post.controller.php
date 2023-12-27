<?php
    require "models/post.model.php";
    $posts = getPosts();
    require "View/Post/post.view.php";

?>