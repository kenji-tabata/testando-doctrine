<?php

require_once 'conexao1.php';

$sql = "SELECT * FROM pesq_main";
$stmt = $conexao->query($sql);

while ($row = $stmt->fetch()) {
    echo $row['nome'] . ", ";
}