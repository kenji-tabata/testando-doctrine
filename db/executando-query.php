<?php

require_once 'conexao1.php';

// http://docs.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/data-retrieval-and-manipulation.html

$sql = "SELECT * FROM pesq_main";
$stmt = $conexao->query($sql);

while ($row = $stmt->fetch()) {
    echo $row['nome'] . ", ";
}
echo "\n\n";

// Parâmetros por posição
$sql = "SELECT * FROM pesq_main WHERE id = ?";
$stmt = $conexao->prepare($sql);
$stmt->bindValue(1, 1);
$stmt->execute();
$pesq = $stmt->fetch();
echo $pesq['nome'];

echo "\n\n";

// Parâmetros por nome
$sql = "SELECT * FROM pesq_main WHERE id = :id";
$stmt = $conexao->prepare($sql);
$stmt->bindValue("id", 2);
$stmt->execute();
$pesq = $stmt->fetch();
echo $pesq['nome'];

echo "\n";

