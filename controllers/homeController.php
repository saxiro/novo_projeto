<?php

  class homeController extends controller{

    public function index(){

      $db = new DBhome();

        $dados = array(
          'h' => $db->getDados()
        );
        $this->loadTemplate('home',$dados);

    }

  }

 ?>
