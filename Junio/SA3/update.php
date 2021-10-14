<?php
$con = new PDO("mysql:host=localhost;dbname=clinica", "root", "");

$con->query("INSERT INTO cadastro_medicos (id_medicos, Nome,Rua, Logradouro, Numero, Complemento,Bairro,CEP,Email,Telefone_Fixo,Celular,Telefone_secundario,a_data)
 VALUES ('123','junio', 'lima', 'vila', '12345','maria','eloir','30451532','juniodias@gmail.com','31932972016','3191458909','3132973921','01/04/1992');");

$con->query("UPDATE medicos SET logadouro='vila' WHERE id_medicos='1';");

$con->query("DELETE FROM medicos WHERE id_medicos='2';");

$busca = $con->query("SELECT * FROM medicos;");
$informacoes = $busca->fetch(PDO::FETCH_ASSOC);

foreach($informacoes as $key => $valor){
    echo "$key = $valor <br>";
};
?>