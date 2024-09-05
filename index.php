<?php
//this file actually used get the enpoint of the current uri

require 'function.php';

//$uri = $_SERVER['REQUEST_URI'];  //Here just save the current uri to the variable
// $uri = parse_url($_SERVER['REQUEST_URI']); // THIS COMMAND DIVIDE THE TOTAL URL LIKE--> with in the array 'path'=>.... , 'string'=>/about
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];  //it looking like  6th line but when we call 'aaaa.php' it catch the 'aaaa' with out extenstion that's all

// dd($uri);
// if($uri === '/'){
//     require 'controller/index.php';
// }
// else if($uri === '/about'){
//     require 'controller/about.php';
// }
// else if($uri === '/contact'){
//     require 'controller/contact.php';
// }
// else{
//     // echo '404';  when call the invalid page
// }

//now we need to change it as an Associative Array 
$routes = [
    '/' => 'controller/index.php',
    '/about' => 'controller/about.php',
    '/contact' => 'controller/contact.php',
];


function routeToController($uri , $routes){
    if(array_key_exists($uri , $routes)){ //here the array call with in the if else condition
        require $routes[$uri];
    }
    else{ //This part only unknown pages like 404
        // http_response_code(404); //this 3 part abort() function part
        // require 'views/404.php'; //this 3 part abort() function part
        // die();  //this 3 part abort() function part
        // Now you can cut and past it abort()
    
        abort();
    
    }
}

function abort($status_code = 404 ){ //default 404 if you need to render other page you can call 
    http_response_code($status_code);
    require "views/{$status_code}.php"; 
    die(); 
}

// if(array_key_exists($uri , $routes)){ //here the array call with in the if else condition
//     require $routes[$uri];
// }
// else{ //This part only unknown pages like 404
//     // http_response_code(404); //this 3 part abort() function part
//     // require 'views/404.php'; //this 3 part abort() function part
//     // die();  //this 3 part abort() function part
//     // Now you can cut and past it abort()

//     abort();

// }// one me this is the final stage cut and past with in the function (LIne no 37 to 48)
routeToController($uri , $routes);