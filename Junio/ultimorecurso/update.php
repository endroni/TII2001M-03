<?php
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=clinica','root','');
    } catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
    
    if(isset($_POST['id'])){
        $id = htmlspecialchars($_POST['id']);
        $nome = htmlspecialchars($_POST['nome']);
        $logr = addslashes($_POST['logradouro']);
        $comp = addslashes($_POST['complemento']);
        $bai = addslashes($_POST['bairro']);
        $CEP = addslashes($_POST['CEP']);
        $email = addslashes($_POST['email']);
        $tl_fixo = addslashes($_POST['tl_fixo']);
        $cel = addslashes($_POST['cel']);
        $tl_sec = addslashes($_POST['tl_sec']);
    
        $sql = $pdo->prepare("UPDATE tbl_registropaciente SET nome = :n, logradouro = :l, complemento = :c, bairro = :b, CEP = :C, email = :e, tl_fixo = :tl, cel = :ce, tl_sec = :tl_ WHERE id_paciente = :id");
        $sql->bindParam(":n", $nome);
        $sql->bindParam(":l", $logr);
        $sql->bindParam(":c", $comp);
        $sql->bindParam(":b", $bai);
        $sql->bindParam(":C", $CEP);
        $sql->bindParam(":e", $email);
        $sql->bindParam(":tl", $tl_fixo);
        $sql->bindParam(":ce", $cel);
        $sql->bindParam(":tl_", $tl_sec);
        $sql->bindParam(":id", $id);
        $sql->execute();
    }
?>