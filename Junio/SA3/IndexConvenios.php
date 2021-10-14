<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Convênios</title>
  
</head>
<body>
    <form action="ClassConvenios.php" method="post">

        <label for="Nome_Fantasia">Nome Fantasia:</label>
        <input type="text" name="Nome_Fantasia">
        
        <label for="rua">CNPJ:</label>
        <input type="text" name="CNPJ">

        <label for="Nome_Empresa">Nome da Empresa:</label>
        <input type="text" name="Nome_Empresa">

        <label for="Email">Email:</label>
        <input type="text" name="Email">

        <label for="Nome_Contato">Nome do Contato:</label>
        <input type="text" name="Nome_Contato">

        <label for="Home_Page">Home Page:</label>
        <input type="text" name="Home_Page">

        <label for="Telefone_1">Telefone 1:</label>
        <input type="text" name="Telefone_1">

        <label for="Telefone_2">Telefone 2:</label>
        <input type="text" name="Telefone_2">

        <label for="db_Data">Data:</label>
        <input type="date" name="db_Data">

        <input type="submit" value="salvar">
        <input type="reset" value="Limpar">
    </form>
</body>
</html>
