<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/Home/index.controller.php',
    '/post' => 'controllers/Post/post.controller.php',
    '/post/create' => 'controllers/Post/post.create.controller.php',
    '/post/edit' => 'controllers/Post/post.edit.controller.php',
    '/post/delete' =>'controllers/Post/post.delete.controller.php',
   ];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
}

