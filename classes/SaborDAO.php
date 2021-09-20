<?php
    require_once "Conexao.php";
    require_once "Sabor.php";

    class SaborDAO{
        
        public $conexao;

        public function __construct(){
            $this->conexao = Conexao::conecta();
        }

        public function listar(){
            try{
                $consulta = $this->conexao->prepare("SELECT * FROM sabor ORDER BY nome");
                $consulta->execute();
                $array = $consulta->fetchAll(PDO::FETCH_CLASS, "Sabor");
                return $array;
            }
            catch(PDOException $e){
                echo "ERRO: ".$e->getMessage();
            }
        }

        public function buscar($cod){

        }        

        public function inserir(Sabor $sabor){
            try{
                $consulta = $this->conexao->prepare("insert into sabor values (NULL, :nome, :ingred, :foto)");
                $consulta->bindParam(":nome", $sabor->getNome());
                $consulta->bindParam(":ingred", $sabor->getIngredientes());
                $consulta->bindParam(":foto", $sabor->getNomeImagem());
                return $consulta->execute();                 
            }
            catch(PDOException $e){
                echo "ERRO: ".$e->getMessage();
            }                
        }

        public function alterar(Sabor $sabor){

        }

        public function excluir($cod){
            try{
                $consulta = $this->conexao->prepare("delete from sabor where codigo=:cod");
                $consulta->bindParam(":cod", $cod);
                return $consulta->execute();
            }
            catch(PDOException $e){
                if($e->getCode() == 23000)
                    return "Este sabor não pode ser excluído, pois já foi comercializado.";
                else    
                    return "ERRO: ".$e->getMessage();
            }               
        }

    }
?>   