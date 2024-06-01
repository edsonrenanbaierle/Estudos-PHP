<?php

    namespace Baierle\Teste\Infraestrutura\Repository;

use Baierle\Teste\Dominio\Model\Endereco;
use Baierle\Teste\Dominio\Model\Funcionario;
    use Baierle\Teste\Dominio\Repository\RepositoryFuncionario;
    use PDO;

    class PdoRepositoryFuncionario implements RepositoryFuncionario{
        private PDO $conexao;

        public function __construct(PDO $conexao)
        {
            $this->conexao = $conexao;
        }

        public function todosOsFuncionarios():array{
            $sqlConsulta = "SELECT * FROM funcionarios";
            $stmt = $this->conexao->query($sqlConsulta);

            return $this->hidratarListaFuncionario($stmt);
        }

        public function salvar(Funcionario $funcionario):bool{
            if($funcionario->getId() == null){
                return $this->createFuncionario($funcionario);
            }

            return $this->updateFuncionario($funcionario);
        }

        public function createFuncionario(Funcionario $funcionario):bool{
            $sqlInsert = "INSERT INTO funcionario (nome, dataDeNascimento, salario, cargo) VALUES (:nome, :dataDeNascimento, :salario, :cargo)";
            $stmt = $this->conexao->prepare($sqlInsert);
            $stmt->bindValue(":nome", $funcionario->getNome(), PDO::PARAM_STR);
            $stmt->bindValue(":dataDeNascimento", $funcionario->getDataDeNascimento()->format("Y-m-d"));
            $stmt->bindValue(":salario", $funcionario->getSalario());
            $stmt->bindValue(":cargo", $funcionario->getCargo());
            $sucesso = $stmt->execute();

            return $sucesso;
        }

        public function ler(Funcionario $funcionario):array{
            $sqlConsulta = "SELECT * FROM funcionario WHERE idFuncionario = :id;";
            $stmt = $this->conexao->prepare($sqlConsulta);  
            $stmt->bindValue(':id', $funcionario->getId(), PDO::PARAM_INT);
            $stmt->execute();

            return $this->hidratarListaFuncionario($stmt);
        }

        public function updateFuncionario(Funcionario $funcionario):bool{
            $sqlUpdate = "UPDATE funcionario SET nome = :nome, dataDeNascimento = :dataDeNascimento, salario = :salario, cargo = :cargo WHERE idProduto = :id;";
            $stmt = $this->conexao->prepare($sqlUpdate);
            $stmt->bindValue(':nome', $funcionario->getNome(), PDO::PARAM_STR);
            $stmt->bindValue(':dataDeNascimento', $funcionario->getDataDeNascimento()->format("Y-m-d"));
            $stmt->bindValue(':salario', $funcionario->getSalario());
            $stmt->bindValue(':cargo', $funcionario->getCargo());

            return $stmt->execute();

        }

        public function delete(Funcionario $funcionario):bool{
            $stmt = $this->conexao->prepare("DELETE FROM funcionario WHERE idFuncionario = ?;");
            $stmt->bindValue(1, $funcionario->getId(), PDO::PARAM_INT);

            return $stmt->execute();
        }

        public function hidratarListaFuncionario(\PDOStatement $stmt){
            $listaDadosFuncionarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $listaFuncionarios = [];

            echo "<table>";
            foreach ($listaDadosFuncionarios as     $dadosFuncioanrio) {
                $listaDadosProdutos[] = new Funcionario(
                    $dadosFuncioanrio['idFuncionario'],
                    $dadosFuncioanrio['nome'],
                    $dadosFuncioanrio['dataDeNascimento'],
                    new Endereco(NULL, "", "", "", NULL),
                    $dadosFuncioanrio['salario'],
                    $dadosFuncioanrio['cargo']
                );

                echo "
                <tr>
                    <td widht='20'>
                        {$dadosFuncioanrio['idFuncionario']}
                    </td>  
                    <td widht='150'>
                        {$dadosFuncioanrio['nome']}
                    </td> 
                    <td align='right'>
                        ".number_format($dadosFuncioanrio['salario'], 2, ',', '.')."
                    </td> 
                </tr>";
            }

            echo "<\table>";

            return $listaFuncionarios;
        }

    }
?>