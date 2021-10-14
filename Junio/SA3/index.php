<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Paciente</title>
</head>
<body>
    <form action="class.php" method="post">
        <label for="nome">Numero médico:</label>
        <input type="text" name="id">

        <label for="nome">Nome:</label>
        <input type="text" name="Nome">
        
        <label for="rua">Rua:</label>
        <input type="text" name="Rua">

        <label for="logradouro">Logradouro:</label>
        <input type="text" name="Logradouro">

        <label for="logradouro">Numero:</label>
        <input type="text" name="Numero">

        <label for="complemento">Complemento:</label>
        <input type="text" name="Complemento">

        <label for="bairro">Bairro:</label>
        <input type="text" name="Bairro">

        <label for="CEP">CEP:</label>
        <input type="text" name="CEP" placeholde="00000-000">

        <label for="email">E-mail:</label>
        <input type="text" name="Email">

        <label for="tl_fixo">Telefone Fixo:</label>
        <input type="text" name="Telefone_Fixo">

        <label for="cel">Celular:</label>
        <input type="text" name="Celular">

        <label for="tl_sec">Telefone Secundário:</label>
        <input type="text" name="Telefone_Secundario">

        <label>
        Data: <input type="date" name="a_data"/>
    </label><br><br>

        <input type="submit" value="Enviar">
    </form>

    <section>