<?php


try {
    
    $con = new PDO("mysql:host=localhost;dbname=clinica", "root", "programadorhabilitado199200");
    
    } catch (PDOException $e) {
        echo "falha no banco de dados: " . $e->getMessage();
    } catch (Exception $e) {
        echo "Falha: " .$e->getMessage();
    }


if(isset( $_POST['id'], $_POST['Nome'], $_POST['Rua'],
 $_POST['logradouro'],$_POST['Numero'], $_POST['Complemento'], $_POST['Bairro'], $_POST['CEP'], $_POST['Email'], 
 $_POST['Telefone_Fixo'], $_POST['Celular'], $_POST['Telefone_Secundario'], $_POST['a_data'])) {
    $id = $_POST['id'];
    $nome = $_POST['Nome'];
    $rua = $_POST['Rua'];
    $logradouro = $_POST['Logradouro'];
    $numero = $_POST['Numero'];
    $complemento = $_POST['Complemento'];
    $bairro = $_POST['Bairro'];
    $cep = $_POST['CEP'];
    $email = $_POST['Email'];
    $celular = $_POST['Telefone_Fixo'];
    $fixo = $_POST['Celular'];
    $secundario = $_POST['Telefone_Secundario'];
    $data = $_POST['a_data'];
}





$mandar = $con->prepare("INSERT INTO cadastro_medicos (id_medicos, Nome,Rua, Logradouro, 
Numero, Complemento,Bairro,CEP,Email,Telefone_Fixo,Celular,Telefone_secundario,a_data)
 VALUES (:id, :n, :r, :l, :nm, :c, :b, :cp, :e, :tf, :cel, :ts, :dt)");
$mandar->bindParam(":id", $id);
$mandar->bindParam(":n", $nome);
$mandar->bindParam(":r", $rua);
$mandar->bindParam(":l", $logradouro);
$mandar->bindParam(":nm", $numero);
$mandar->bindParam(":c", $complemento);
$mandar->bindParam(":b", $bairro);
$mandar->bindParam(":cp", $cep);
$mandar->bindParam(":e", $email);
$mandar->bindParam(":tf", $fixo);
$mandar->bindParam(":cel", $celular);
$mandar->bindParam(":ts", $secundario);
$mandar->bindParam(":dt", $data);
$mandar->execute();





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <h1>Cadastro Realizado</h1>
</body>
</html>