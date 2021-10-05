<main>
    <h2>Carrinho</h2>
    <hr>
    <p>
        <?php
        if(!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0)
            echo "Seu carrinho está vazio";
        else{
            ?>
            <table>
               <tr>
                   <th>Tamanho</th>
                   <th>Sabores</th>
                   <th>Borda</th>
                   <th>Preço</th>
                   <th>Excluir</th>
               </tr> 
               <?php
               include_once("classes/ItemCarrinho.php");
               include_once("classes/Helper.php");
               $total = 0;
               foreach($_SESSION['cart'] as $pos => $item){
                   $item = unserialize($item);
                   $total += $item->getPreco();
                   echo 
                   "<tr>
                        <td>".$item->getNomeTamanho()."</td>
                        <td>".$item->getListaSabores()."</td>
                        <td>".$item->getBorda()."</td>
                        <td>".Helper::formataPreco($item->getPreco())."</td>
                        <td><a href='index.php?acao=delCarrinho&pos=$pos'>excluir</a></td>
                    </tr>";    
               }
               ?>
               <tr>
                   <th colspan="3">Total:</th>
                   <th colspan="2"><?=Helper::formataPreco($total)?></th>
               </tr>
            </table>
            <br>
            <form method="post" action="index.php?acao=fechar" id="form">
                <fieldset>
                    <legend>Opções de entrega:</legend>
                    <label><input type="radio" name="tipoEntrega" value="0" checked>Retirar na loja</label><br>
                    <label><input type="radio" name="tipoEntrega" value="1">Receber em casa</label><br>
                </fieldset>
                <p><a href="index.php?acao=pedido"><span class="material-icons">shopping_bag</span> Continuar comprando</a></p>
                <p><a href="#" onclick="if (confirm('Confirma o fechamento deste pedido?')) document.getElementById('form').submit(); else return false;"><span class="material-icons">check_circle</span> Fechar pedido</a></p>
            </form>
        
            <?php
        }    
        ?>
    </p>
</main>