<?php 

    namespace App\Core;

    use Controller;
    use App\Http\Request;
    use App\Http\Response;

    class Core{

        public static function dispatch(array $routes){
            $url = "/";

            if(isset($_GET["url"])){
                $url = $url . $_GET["url"];
            }

            if($url !== '/'){
                $url = rtrim($url, "/");
            }

            $notFound = false;
            $prefixController = 'App\\Controller\\';
            foreach ($routes as $route) {
                $pattern = '#^'. preg_replace('/{id}/', '([\w-]+)', $route['path']) .'$#';

                if(preg_match($pattern, $url, $matches)){
                    array_shift($matches);
                    $notFound = true;

                    if($route['method'] !== Request::method()){
                        Response::json(
                            [
                                'error' => true,
                                'sucess' => false,
                                'message' => 'sorry, method now alowed'
                            ], 405
                        );
                        return;
                    }

                    [$controller, $action] = explode('@', $route['action']);
                    
                    $controller = $prefixController . $controller;
                    $extendController = new $controller();
                    $extendController->$action(new Request, new Response, $matches);
                    
                }  
            }

            if(!$notFound){
                $controller = $prefixController . "NotFoundController";
                $extendController = new $controller();
                $extendController->index(new Request, new Response);
            }
        }
    }