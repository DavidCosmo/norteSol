<?php

namespace app\Entity;

use \app\Db\Database;

class Produto{

    /**
     * identificador único da vaga
     * @var integer
     */
    public $id;

     /**
      * preço do produto
      * @var string
      */
    public $preco;

     /**
      * categoria do produto
      * @var string
      */
    public $categoria;

     /**
      * vendas do produto
      * @var string
      */
    public $vendas;

    /**
     * método responsável por cadastrar um novo produto no banco
     */
    public function Cadastrar(){
      // DEFINIR A DATA
      $this->data = date('Y-m-d H:i:s');

      // INSERIR O PRODUTO NO BANCO
      $obDatabase = new Database('placas');
      echo "<pre>"; print_r($obDatabase); echo "</pre>"; exit;

      // ATRIBUIR O ID DO PRODUTO NA INSTÂNCIA

      // RETORNAR SUCESSO

    }


}