<?php

  $BASE_URL = $_SERVER['HTTP_REFERER'];
  $produtos =[
    [
      'id' => 1,
      'nome' => 'Pipoca doce',
      'imagem' => $BASE_URL.'images/pipoca-doce.png',
      'preco' => '5,90',
      'descricao' => 'Pipoca feito com açucar e chocolate.'
    ],
    [
      'id' => 2,
      'nome' => 'Pirulito',
      'imagem' => $BASE_URL.'images/pirulito.png',
      'preco' => '3,90',
      'descricao' => 'Pirulito feito de creme com canela.'
    ],
    [
      'id' => 3,
      'nome' => 'Jujubas',
      'preco' => '2,90',
      'imagem' => $BASE_URL.'images/jujubas.png',
      'descricao' => 'Churros, peça já um pacote.'
    ]
  ]
?>