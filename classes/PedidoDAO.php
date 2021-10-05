<?php
    require_once "Conexao.php";
    require_once "Pedido.php";
    require_once "ItemCarrinho.php";

    class PedidoDAO{
        
        public $conexao;

        public function __construct(){
            $this->conexao = Conexao::conecta();
        }

        public function inserir(Pedido $p){
            try{
                // inserindo pedido
                $consulta = $this->conexao->prepare("insert into pedido values (NULL, :codCli, :taxa, :tipo, :data, :status)");
                $consulta->bindValue(":codCli", $p->getCodCliente());
                $consulta->bindValue(":taxa", $p->getTaxaEntrega());
                $consulta->bindValue(":tipo", $p->getTipoEntrega());
                $consulta->bindValue(":data", $p->getDataPedido());
                $consulta->bindValue(":status", $p->getStatus());
                $consulta->execute();
                // recuperando o id que foi gerado
                $consulta = $this->conexao->prepare("select max(codigo) as codigo from pedido where codCliente = :codCli");
                $consulta->bindValue(":codCli", $p->getCodCliente());
                $consulta->execute();
                $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
                $codPedido = $resultado['codigo']; 
                // inserir os itens
                foreach($p->getItens() as $item){
                    $consulta = $this->conexao->prepare("insert into itempedido values (NULL, :codPedido, :codTamanho, :s1, :s2, :s3, :s4, :borda, :valor) "); 
                    $consulta->bindValue(":codPedido", $codPedido);
                    $consulta->bindValue(":codTamanho", $item->getCodTamanho()); 
                    $sabores = $item->getSabores(); // array (cod, nome) 
                    $consulta->bindValue(":s1", isset($sabores[0]) ? $sabores[0][0] : NULL); 
                    $consulta->bindValue(":s2", isset($sabores[1]) ? $sabores[1][0] : NULL); 
                    $consulta->bindValue(":s3", isset($sabores[2]) ? $sabores[2][0] : NULL); 
                    $consulta->bindValue(":s4", isset($sabores[3]) ? $sabores[3][0] : NULL); 
                    $consulta->bindValue(":borda", $item->getBorda()); 
                    $consulta->bindValue(":valor", $item->getPreco()); 
                    $consulta->execute();
                }
                return $codPedido;
            }
            catch(PDOException $e){
                echo "ERRO: ".$e->getMessage();
            }                
        }

    }
?>   