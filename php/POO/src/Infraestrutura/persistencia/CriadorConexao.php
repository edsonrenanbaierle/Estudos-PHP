<?php 
    namespace Baierle\Teste\Infraestrutura\persistencia;

    use PDO;
    use PDOException;

    class CriadorConexao{
        public static function criarConexao() : PDO{
            try {
                $pdo = new PDO("mysql:host=meu-mysql-php;dbname=produto", "root", "root");
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;
            } catch (PDOException $exeption) {
                echo "Erro: " . $exeption->getMessage();
            }
        }
    }
?>