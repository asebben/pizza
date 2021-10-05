<?php
    include_once("views/layout/topo.php");

    if(isset($_GET['acao'])){

        if($_GET['acao'] == "login"){
            include_once("classes/ClienteDAO.php");
            $obj = new ClienteDAO();
            if ($res = $obj->autenticar($_POST['field_email'], $_POST['field_senha'])){ // sucesso
                $_SESSION['codigo'] = $res['codigo'];
                $_SESSION['nome'] = $res['nome'];
                $_SESSION['endereco'] = $res['endereco'];
                $_SESSION['bairro'] = $res['bairro'];
                header("Location: index.php?acao=minhaconta");
            }
            else{ // login e/ou senha incorretos
                header("Location: index.php?acao=cliente&erro=1");
            }
            
        }

        elseif($_GET['acao'] == "sair"){
            session_destroy();
            header("Location: index.php");
        }

        elseif($_GET['acao']=="cliente" && isset($_SESSION['nome'])){ // esta logada e tenta entrar na pagina de login
            header("Location: index.php?acao=minhaconta");         
        }

        // carrinho de compras
        elseif($_GET['acao'] == "addCarrinho"){
            // adicionar
            include_once("classes/ItemCarrinho.php");
            // criando objeto
            $obj = new ItemCarrinho();
            $obj->setCodTamanho($_POST['codTamanho']);
            $obj->setNomeTamanho($_POST['nomeTamanho']);
            $obj->setPreco($_POST['preco']);
            foreach($_POST['sabores'] as $sabor){ // percorrendo lista de checkboxes marcados
                $sabor = explode("-", $sabor);
                $escolhidos[] = array($sabor[0], $sabor[1]);
            }
            $obj->setSabores($escolhidos);
            $obj->setBorda($_POST['borda']);
            // adicionando objeto a session
            $_SESSION['cart'][] = serialize($obj);
            header("Location: index.php?acao=carrinho");
        }

        elseif($_GET['acao'] == "delCarrinho"){
            // excluir
            unset($_SESSION['cart'][$_GET['pos']]);
            header("Location: index.php?acao=carrinho");

        }     
        
        elseif($_GET['acao'] == "fechar"){
            if(!isset($_SESSION['nome'])){ // nao logado
                header("Location: index.php?acao=cliente");
                die(); // interrompe
            }
            include_once("classes/ItemCarrinho.php");
            include_once("classes/PedidoDAO.php");
            $p = new Pedido();
            $p->setCodCliente($_SESSION['codigo']);
            $p->setTaxaEntrega(0);
            $p->setTipoEntrega($_POST['tipoEntrega']);
            $p->setDataPedido(date("Y-m-d H:i:s"));
            $p->setStatus(0);
            // incluir itens
            $listaItens = array();
            foreach ($_SESSION['cart'] as $item){
                $listaItens[] = unserialize($item);
            }
            $p->setItens($listaItens);
            // fim itens
            $bd = new PedidoDAO();
            $codPedido = $bd->inserir($p);
            if($codPedido){
                echo "<p>O pedido nº <b>$codPedido</b> foi recebido com sucesso! Acompanhe o andamento na área do cliente.";
                unset($_SESSION['cart']); // esvaziar o carrinho
            }

        }

        else
            include_once("views/{$_GET['acao']}.php");
    }
    else
        include_once("views/inicio.php");

    include_once("views/layout/rodape.php");
?>