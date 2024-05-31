<?php
    namespace Baierle\Teste\Infraestrutura\Repository;

    use Baierle\Teste\Dominio\Repository\RepositoryProduct;
    use Baierle\Teste\Dominio\Model\Produto;
use PDO;

    class PdoRepositoryProduto implements RepositoryProduct{
        private PDO $conexao;

        public function __construct(PDO $conexao)
        {
            $this->conexao = $conexao;
        }

        public function todosOsProdutos():array{
            $sqlConsulta = "SELECT * FROM produto";
            $stmt = $this->conexao->query($sqlConsulta);

            return $this->hidratarListaProdutos($stmt);
        }

        public function salvar(Produto $produto):bool{
            if($produto->getIdProduto() == null){
                return $this->createProduto($produto);
            }

            return $this->updateProduto($produto);
        }

        public function createProduto(Produto $produto):bool{
            $sqlInsert = "INSERT INTO produto (nomeProduto, precoProduto) VALUES (:nome, :preco)";
            $stmt = $this->conexao->prepare($sqlInsert);
            $stmt->bindValue(":nome", $produto->getnomeProduto(), PDO::PARAM_STR);
            $stmt->bindValue(":preco", $produto->getPrecoProduto(), PDO::PARAM_STR);
            $sucesso = $stmt->execute();

            if($sucesso){
                $produto->setIdProduto($this->conexao->lastInsertId());
            }

            return $sucesso;
        }

        public function readProduto(Produto $produto):array{
            $sqlConsulta = "SELECT * FROM produto WHERE idProduto = :id;";
            $stmt = $this->conexao->prepare($sqlConsulta);  
            $stmt->bindValue(':id', $produto->getIdProduto(), PDO::PARAM_INT);
            $stmt->execute();

            return $this->hidratarListaProdutos($stmt);
        }

        public function updateProduto(Produto $produto):bool{
            $sqlUpdate = "UPDATE produto SET nomeProduto = :nome, precoProduto = :preco WHERE idProduto = :id;";
            $stmt = $this->conexao->prepare($sqlUpdate);
            $stmt->bindValue(':nome', $produto->getnomeProduto(), PDO::PARAM_STR);
            $stmt->bindValue(':preco', $produto->getPrecoProduto());
            $stmt->bindValue(':id', $produto->getIdProduto(), PDO::PARAM_INT);

            return $stmt->execute();

        }

        public function deleteProduto(Produto $produto):bool{
            $stmt = $this->conexao->prepare("DELETE FROM produto WHERE idProduto = ?;");
            $stmt->bindValue(1, $produto->getIdProduto(), PDO::PARAM_INT);

            return $stmt->execute();
        }

        public function hidratarListaProdutos(\PDOStatement $stmt){
            $listaDadosProdutos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $listaProdutos = [];

            echo "<table>";
            foreach ($listaDadosProdutos as     $dadosProdutos) {
                $listaDadosProdutos[] = new Produto(
                    $dadosProdutos['idProduto'],
                    $dadosProdutos['nomeProduto'],
                    $dadosProdutos['precoProduto']
                );

                echo "
                <tr>
                    <td widht='20'>
                        {$dadosProdutos['idProduto']}
                    </td>  
                    <td widht='150'>
                        {$dadosProdutos['nomeProduto']}
                    </td> 
                    <td align='right'>
                        ".number_format($dadosProdutos['nomeProduto'], 2, ',', '.')."
                    </td> 
                </tr>";
            }

            echo "<\table>";

            return $listaProdutos;
        }

    }
?>