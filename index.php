<?php
//this file actually used get the enpoint of the current uri

require 'function.php';
// require 'router.php';


class Database{

    public $connection;
    public function __construct()
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=posts;user=root;charset=utf8mb4";
        $this->connection = new PDO($dsn);
    }

    public function query($query){
        $statement = $this->connection->prepare($query); 
        $statement->execute();
        return $statement;
    }
}

$db =  new Database();
$posts = $db->query("SELECT * FROM post")->fetch(PDO::FETCH_ASSOC);

// dd($posts);

foreach ($posts as $post){
    echo "<li>".$post['title']."</li>";
}