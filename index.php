<?php
//this file actually used get the enpoint of the current uri

require 'function.php';
// require 'router.php';

$dsn = "mysql:host=localhost;port=3306;dbname=posts;user=root;charset=utf8mb4";
$pdo = new PDO($dsn);

$statement = $pdo->prepare("SELECT * FROM post");
$statement->execute();

// $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
// dd($posts);

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($posts as $post){
    echo "<li>".$post['title']."</li>";
}