<?php

$uri = parse_url ($_SERVER['REQUEST_URI'])['path'];

$uri = trim($uri, '/');

$routes = include ('routes/web.php');
    if(!$uri) {
        $uri = 'index';
    }

    foreach ($routes as $routeUri => $path){
        if(str_starts_with($uri,$routeUri)){
            $controllerMethod= explode('/',$path);

            $controllerName = $controllerMethod[0];
            $method = $controllerMethod[1];

            $params = explode('/', $uri);

            $param = $params[2] ?? null;

            include_once ("controllers/$controllerName.php");

            $controllerObject = new $controllerName;

            if($param) {
                $controllerObject->$method($param);
            }else{
                $controllerObject->$method();
            }
            break;
    }
}