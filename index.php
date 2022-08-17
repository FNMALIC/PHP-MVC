<?php

require_once __DIR__."/vendor/autoload.php";


use App\Application;

// var_dump();
$app  = new Application();


$app->router->get('/',function ()
{
    return "Hello World";
});

$app->router->get('/contact',function ()
{
    return "Contact";
});

$app->run();