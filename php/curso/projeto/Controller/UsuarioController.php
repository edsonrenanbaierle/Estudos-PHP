<?php
    require_once("DAO/UsuarioDAO.php");

    class UsuarioController{
        private $usuarioDao;

        public function __construct(){
            $this->usuarioDao = new UsuarioDAO;
        }

        public function autenticar(string $email, string $senha){
            if(strpos($email, '@') > 0 && strpos($email, '.') > 0 && strlen($senha) >= 7){
                return $this->usuarioDao->autenticar($email, $senha);
            }else{
                return null;
            }
        }


        public function cadastrar(Usuario $usuario){
            if(strlen($usuario->getNome()) > 3 && $usuario->getSenha() >= 7 && strpos($usuario->getEmail(), "@") > 0){
                return $this->usuarioDao->cadastrar($usuario);
            }else{
                return -2; //dados invalidos
            }
        }

        public function retornarUsuario(string $email){
            if(strpos($email, '@') > 0 && strpos($email, '.') > 0){
                return $this->usuarioDao->retornarUsuario($email);
            }else{
                return null;
            }
        }
    }

?>