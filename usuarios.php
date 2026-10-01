<?php

include "conexao.php";
$resultado = $conexao->query("SELECT * FROM competidores");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Competidores - Hackathon SENAI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Competidores cadastrados</h1>
        <h2>Hackathon SENAI</h2>
        <?php
        while ($linha = $resultado->fetch_assoc()) {
            echo $linha["id"] . " - ";
            echo $linha["nome"] . " - ";
            echo $linha["email"] . " - ";
            echo $linha["area_interesse"];
            echo "<br><br>";
        }
        ?>
    </div>
</body>
</html>