<?php 

    namespace App\Controller;

    use App\Http\Request;
    use App\Http\Response;
    use App\Service\UserService;

    class UserController{

        public static function store(Request $request,  Response $response){
            $body = $request::body();

            $userService = UserService::create($body);

            if(isset($userService['error'])){
                return $response::json([
                    'error' => true,
                    'sucess' => false,
                    'message' =>  $userService['error']
                ], 400);
            }

            $response::json([
                'error' => false,
                'sucess' => true,
                'data' => $userService
            ], 201);
            
        }

        public static function login(Request $request,  Response $response){
            $body = $request::body();

            $userService = UserService::auth($body);

            if(isset($userService['error'])){
                return $response::json([
                    'error' => true,
                    'sucess' => false,
                    'message' =>  $userService['error']
                ], 400);
            }

            $response::json([
                'error' => false,
                'sucess' => true,
                'jwt' => $userService
            ], 201);

            return;
        }

        public static function fetch(Request $request,  Response $response){
            $auth = $request::auth();

            $userService = UserService::fetch($auth);

            if(isset($userService['error'])){
                return $response::json([
                    'error' => true,
                    'sucess' => false,
                    'message' =>  $userService['error']
                ], 400);
            }

            $response::json([
                'error' => false,
                'sucess' => true,
                'jwt' => $userService
            ], 201);
            return;
        }

        public static function update(Request $request,  Response $response){

        }

        public static function remove(Request $request,  Response $response, $id){

        }
    }