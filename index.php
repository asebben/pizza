<?php
    include_once("views/layout/topo.php");

    if(isset($_GET['acao']))
        include_once("views/{$_GET['acao']}.php");
    else
        include_once("views/inicio.php");

    include_once("views/layout/rodape.php");
?>