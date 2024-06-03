<?php 

    namespace App\Service;

    use App\Http\JWT;
    use App\Model\User;
    use App\Utils\Validator;

    class UserService {

        public static function create($data){
            try {
                $fields = Validator::validate([
                    'name'       => $data['name']     ??  '',
                    'email'      => $data['email']    ??  '',
                    'password'   => $data['password'] ??  ''
                ]);

                $fields['password'] = password_hash($fields['password'], PASSWORD_DEFAULT);

                $user = User::save($fields);

                if(!$user) return ["error" => 'Sorry, we could not create your account'];

                return "User Criado com sucesso";

                
            }catch(\PDOException $e){
                if($e->errorInfo[0] === 'HY000'){
                    return ["error" => "Não foi possivel conectar com o Database"];
                }
                return ['error' => $e->getMessage()];
            }catch (\Exception $e) {
                return ['error' => $e->getMessage()];
            } 
        }

        public static function auth(array $data){
            try {
                $fields = Validator::validate([
                    'email'      => $data['email']    ??  '',
                    'password'   => $data['password'] ??  ''
                ]);

                $user = User::auth($fields);

                if(!$user) return ["error" => 'Sorry, nao foi possivel autenticar você'];

                return JWT::generate($user);

            } catch(\PDOException $e){
                if($e->errorInfo[0] === 'HY000'){
                    return ["error" => "Não foi possivel conectar com o Database"];
                }
                return ['error' => $e->getMessage()];
            }catch (\Exception $e) {
                return ['error' => $e->getMessage()];
            } 
        }

        public static function fetch($auth){
            try {
                if(isset($auth['error'])){
                    return ['error' => $auth['error']];                                                                                                                             
                }
                $userFromJwt = JWT::verify($auth);

                if(!$userFromJwt) return ["error" => "Please, é necessario fazer login"];

                return $userFromJwt;
            } catch(\PDOException $e){
                if($e->errorInfo[0] === 'HY000'){
                    return ["error" => "Não foi possivel conectar com o Database"];
                }
                return ['error' => $e->getMessage()];
            }catch (\Exception $e) {
                return ['error' => $e->getMessage()];
            } 
        }


    }