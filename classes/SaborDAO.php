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

        }

        public function alterar(Sabor $sabor){

        }

        public function excluir($cod){

        }

    }
?>   