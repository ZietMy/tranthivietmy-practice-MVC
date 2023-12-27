<?php 
// select all
function getPosts() : array
{
    global $connection;
    $statement = $connection->prepare("select * from posts");
    $statement->execute();
    return $statement->fetchAll();
}
function getPost(int $id) : array{

    global $connection;
    $statement = $connection->prepare("select * from posts where id = :id");
    $statement->execute(['id'=>$id]);
    return $statement->fetch();
}
// insert data into post table
function createPost(string $title, string $description){
    global $connection;
    $statement = $connection->prepare("insert into posts (title, description) values (:title, :description)");
    $statement->execute([
    ':title' => $title,
    ':description' =>  $description
    ]);
}
//update data
function updatePost(int $id,string $title, string $description,){
    global $connection;
    $statement = $connection->prepare("update posts set title = :title, description = :description where id = :id");
    $statement->execute([
        ':title' => $title,
        ':description' => $description,
        ':id' => $id
    ]);
}
function deletePost(int $id){

    global $connection;
    $statement = $connection->prepare("delete from posts where id = :id");
    $statement->execute(['id'=>$id]);
    return $statement->fetch();
}
?>