<?php
    namespace App\Controller;

    use App\Http\Request;
    use App\Http\Response;

    class NotFoundController{
        public function index(Request $request, Response $response){
            $response::json([
                'error' => true,
                'sucess' => false,
                'message' => 'sorry, route not found'
            ], 404);
            return;
        }
    }