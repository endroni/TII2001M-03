<?php
    require_once 'class.php';
    $_con = new cadastroPaciente();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Paciente</title>
</head>
<body>
    <form action="class.php" method="$_POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome">
        
        <label for="rua">Rua:</label>
        <input type="text" name="rua">

        <label for="logradouro">Logradouro:</label>
        <input type="text" name="logradouro">

        <label for="complemento">Complemento:</label>
        <input type="text" name="complemento">

        <label for="bairro">Bairro:</label>
        <input type="text" name="bairro">

        <label for="CEP">CEP:</label>
        <input type="text" name="CEP" placeholde="00000-000">

        <label for="email">E-mail:</label>
        <input type="text" name="email">

        <label for="tl_fixo">Telefone Fixo:</label>
        <input type="text" name="tl_fixo">

        <label for="cel">Celular:</label>
        <input type="text" name="cel">

        <label for="tl_sec">Telefone Secundário:</label>
        <input type="text" name="tl_sec">

        <input type="submit" value="salvar">
    </form>
</body>
</html>