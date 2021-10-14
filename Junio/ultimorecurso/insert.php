<?php
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=clinica','root','');
    } catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }

    if(isset($_POST['nome'])){
        $nome = htmlspecialchars($_POST['nome']);
        $logr = addslashes($_POST['logradouro']);
        $comp = addslashes($_POST['complemento']);
        $bai = addslashes($_POST['bairro']);
        $CEP = addslashes($_POST['CEP']);
        $email = addslashes($_POST['email']);
        $tl_fixo = addslashes($_POST['tl_fixo']);
        $cel = addslashes($_POST['cel']);
        $tl_sec = addslashes($_POST['tl_sec']);

        $sql = $pdo->prepare("INSERT INTO tbl_registroPaciente (nome, logradouro, complemento, bairro, CEP, email, tl_fixo, cel, tl_sec) 
        VALUES (:nome,:logr,:comp,:bai,:CEP,:email,:tl_fixo,:cel,:tl_sec)");
        $sql->bindParam(":nome", $nome);
        $sql->bindParam(":logr", $logr);
        $sql->bindParam(":comp", $comp);
        $sql->bindParam(":bai", $bai);
        $sql->bindParam(":CEP", $CEP);
        $sql->bindParam(":email", $email);
        $sql->bindParam(":tl_fixo", $tl_fixo);
        $sql->bindParam(":cel", $cel);
        $sql->bindParam(":tl_sec", $tl_sec);
        $sql->execute();
    }
?>