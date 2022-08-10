<?php

require __DIR__.'/vendor/autoload.php';

use \app\Entity\Produto;

// VALIDAÇÃO DO POST 

if(isset($_POST['preco'],$_POST['categoria'],$_POST['vendas'])){
    $obProduto = new Produto;
    $obProduto->preco = $_POST['preco'];
    $obProduto->categoria = $_POST['categoria'];
    $obProduto->vendas = $_POST['vendas'];
    $obProduto->Cadastrar();

    //echo "<pre>"; print_r($obProduto); echo "</pre>"; exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';