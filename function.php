<?php
function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die(); // this is function use when the error or any kind of exection need to stop after the die execution
    // mostly connection error or db account non authenticated

}

    // dd($_SERVER) You can check the all information about the index.php thats called super global
    // if you need to check the url:-  echo $SERVER['REQUEST_URL']; output--> /
    function urlIs($value) {
       return $_SERVER['REQUEST_URI'] === $value;
    }



// echo $_SERVER['REQUEST_URL'] === '/' ? 'bg-gray-900 text-white' : 'text-gray-300';
