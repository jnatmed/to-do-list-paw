<?php

include 'setup.php';

try{
    $router->direct($request);
}catch(Error $e){
    http_response_code(404);
    include "views/error.404.view.php";
}

?>