<?php
abstract class Helper{
    public static function formataPreco($preco){
        return "R$ ".number_format($preco, 2, ",", ".");
    }
}
?>