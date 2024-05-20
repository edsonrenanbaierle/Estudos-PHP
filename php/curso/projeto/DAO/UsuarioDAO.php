<?php 
    include_once("Model/Usuario.php");

    class UsuarioDAO{
        private $debug = true;
        private $dir = "Arquivos";

        public function __construct(){
            
        }

        public function autenticar(string $email, string $senha){
            $fileName = "$email" . ".txt";

            if($this->verificaSeArquivoExiste($fileName)){
                $usuario = $this->retornarUsuario($fileName);
                if($usuario->getSenha() == md5($senha)){
                    return $usuario;
                }else{
                    return null;
                }
            }else{
                return null;
            }
        }

        public function cadastrar(Usuario $usuario){
            try {
                $fileName = $usuario->getEmail() . ".txt";
                if(!$this->verificaSeArquivoExiste($fileName)){//se usuario não existir
                    //cadastro de usuario
                    $diretorioCompleto = $this->dir . "/" . $fileName;
                    $fopen = fopen($diretorioCompleto, 'w');

                    $str = "{$usuario->getNome()};{$usuario->getEmail()};{$usuario->getSenha()};{$usuario->getData()}";
                    
                    if(fwrite($fopen, $str)){//se funcionar a escrita no aqr
                        fclose($fopen);
                        return 1; //usuario cadastrado com sucesso
                    }else{
                        fclose($fopen);//fechar conexao com o arq  
                        return -10; //erro ao tentar cadastras(o fwrite devolve false em caso de erro)
                    }

                }else{
                    return -1; //usuario cadastrado
                }

               
            } catch (Exception $e) {
                if($this->debug){
                    echo $e->getMessage();
                }
            }
        }

        public function retornarUsuario(string $email){
            if ($this->verificaSeArquivoExiste($email)) {
                $diretorioCompleto = $this->dir . "/" . $email;
                $fopen = fopen($diretorioCompleto, "r");

                $file = fread($fopen, filesize($diretorioCompleto));
                
                $arr = explode(";", $file);
                
                $usuario = new Usuario();
                $usuario->setNome($arr[0]);
                $usuario->setEmail($arr[1]);
                $usuario->setSenha($arr[3]);
                $usuario->setData($arr[4]);
                fclose($fopen);

                return $usuario;

            } else {
                return null;
            }
            
        }

        private function verificaSeArquivoExiste(string $arquivoName){
            $diretorioCompleto = $this->dir . "/" . $arquivoName;

            //verifica se um arquivo existe
            if(file_exists($diretorioCompleto)){
                return true;
            }else{
                return false;
            }
        }
    }
?>