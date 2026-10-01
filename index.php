<?php

include "conexao.php";
$nome = "";
$email = "";
$area_interesse = "";
$mensagem = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $area_interesse = $_POST["area_interesse"];
    if ($nome === "" || $email === "" || $area_interesse === "") {
        $mensagem = "Preencha todos os campos.";
    } else {
        $sql = "INSERT INTO competidores 
                (nome, email, area_interesse) 
                VALUES 
                ('$nome', '$email', '$area_interesse')";
        $conexao->query($sql);
        $mensagem = "Inscrição realizada com sucesso!";
        $nome = "";
        $email = "";
        $area_interesse = "";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackathon SENAI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Hackathon SENAI</h1>
        <h2>Inscrição de Competidores</h2>
        <?php if ($mensagem !== "") { ?>
            <p class="mensagem">
                <?php echo $mensagem; ?>
            </p>
        <?php } ?>
        <form method="POST">
            <label>Nome</label>
            <input type="text" name="nome" placeholder="Digite seu nome" value="<?php echo $nome; ?>">
            <label>E-mail</label>
            <input type="email" name="email" placeholder="Digite seu e-mail" value="<?php echo $email; ?>">
            <label>Área de Interesse</label>
            <input type="text" name="area_interesse" placeholder="Ex.: Inteligência Artificial" value="<?php echo $area_interesse; ?>">
            <button type="submit">
                Inscrever-se
            </button>
        </form>
    </div>
</body>
</html>