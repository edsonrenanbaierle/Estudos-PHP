<?php 

    namespace App\Model;

    use App\Model\DataBase;
    use PDO;

    class User extends DataBase{

        public static function save(array $data){
            $pdo = self::getConexao();
            $stmt = $pdo->prepare("
                INSERT INTO users (name, email, password) 
                VALUES (:name, :email, :password);
            ");

            $stmt->bindParam(":name", $data['name']);
            $stmt->bindParam(":email", $data['email']);
            $stmt->bindParam(":password", $data['password']);

            $stmt->execute();

            return $pdo->lastInsertId() > 0 ? true : false;
        }

        public static function auth(array $data){
            $pdo = self::getConexao();

            $stmt = $pdo->prepare("
                SELECT * FROM users WHERE email = :email
            ");

            $stmt->bindParam(":email", $data['email']);
            $stmt->execute();
            
            if ($stmt->rowCount() < 1) return false;

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if(!password_verify($data['password'], $user['password'])) return false;

            return [
                'id' => $user['id'],
                'name' => $user['name'],
                'email' => $user['email'],
            ];
        }

        public static function find(int|string $id){
            $pdo = self::getConexao();

            $stmt = $pdo->prepare("
                SELECT * FROM users WHERE id = :id
            ");

            $stmt->bindParam(":id", $id);
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);

        }
    }