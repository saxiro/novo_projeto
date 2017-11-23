<?php
  class empresaController extends controller{
    public function index(){

      $db = new DBempresa();

        $dados = array(
          'e' => $db->getDados()
        );
        $this->loadTemplate('empresa',$dados);

    }
  }
 ?>
