<?php

  require 'environment.php';

  $config = array();

  if(ENVIRONMENT == 'development'){
    define ('BASE_URL', 'http://192.168.25.3/Sites/Projeto_Sites_2017/novo_projeto/');
    // $config['dbname'] = 'estrutura_mvc';
    // $config['host'] = 'localhost';
    // $config['dbuser'] = 'root';
    // $config['dbpass'] = '';
  } else {
    define ('BASE_URL', 'http://webvila.com.br/novo_projeto/');
    // $config['dbname'] = 'estrutura_mvc';
    // $config['host'] = 'localhost';
    // $config['dbuser'] = 'root';
    // $config['dbpass'] = '';
  }

//global $db;

  try {
  //  $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'],$config['dbpass']);
  } catch (PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
  }


 ?>
