<?php
include_once "views/layout/topo.php";
include_once "../classes/SaborDAO.php";
if(!isset($_GET['acao'])){
    // nenhuma acao: carrega pg inicial de adm. de sabores 
    $titulo = "Lista de Sabores";
    //...
}
else {    
	switch($_GET['acao']){

        case 'cadastra':
            $titulo = "Cadastro de Sabor";
            //...           
            break;

        
        case 'altera':
            $titulo = "Alteração de Sabor";
            //...            
            break;

        
        case 'exclui':
            $titulo = "Exclusão de Sabor";
            //...            
            break;
        
        default:
            echo "Ação não permitida";  
                      
    }// fim switch
} // fim else
echo $titulo;
include_once "views/layout/rodape.php";
?>

