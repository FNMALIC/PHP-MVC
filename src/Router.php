<?php
namespace App;


class Router{

    public Request $request;
    protected array $routes = [];

    public function __construct(Request $request)
    {
        $this->request = $request;
        
    }
    public function get($path, $callback)
    {
        
        $this->routes['get'][$path] = $callback;

    }
    public function resolve()
    {
        //    echo '<pre>';
        //    var_dump($_SERVER);
        //    echo '</pre>';
        //    exit;

        $this->request->getPath();
    }

}