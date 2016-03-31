<?php

require_once 'conexao1.php';

// Create
$conexao->insert('pesq_main', array(
    'id_grupo'  => 0,
    'codigo'    => null,
    'status'    => "preenchido",
    'oculto'    => 0,
    'nome'      => "Manoel",
    'sexo'      => "M",
    'cpf'       => "111.222.333-44",
    'cargo'     => "Desconhecido"
    ));

// Read
$conexao->fetchAssoc("SELECT * FROM pesq_main WHERE nome=?", array("Manoel"));

// Update
$conexao->update('pesq_main', array('nome' => "Manoel de Nobrega"), array("id" => 2));

// Delete
$conexao->delete('pesq_main', array('nome' => "Manoel"));