<?php
//this file actually used get the enpoint of the current uri

require 'function.php';

//$uri = $_SERVER['REQUEST_URI'];  //Here just save the current uri to the variable
// $uri = parse_url($_SERVER['REQUEST_URI']); // THIS COMMAND DIVIDE THE TOTAL URL LIKE--> with in the array 'path'=>.... , 'string'=>/about
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];  //it looking like  6th line but when we call 'aaaa.php' it catch the 'aaaa' with out extenstion that's all

// dd($uri);
if($uri === '/'){
    require 'controller/index.php';
}
else if($uri === '/about'){
    require 'controller/about.php';
}
else if($uri === '/contact'){
    require 'controller/contact.php';
}
else{
    echo '404'; // when call the invalid page
}

