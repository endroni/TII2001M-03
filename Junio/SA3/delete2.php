<?php
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=clinica','root','');
    } catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
    
    if(isset($_POST['id']) && !empty($_POST['id'])){
        $id = addslashes($_POST['id']);

        $sql = $pdo->prepare("DELETE FROM tbl_registropaciente WHERE id_paciente = :id");
        $sql->bindParam(":id", $id);
        $sql->execute();
    }
?>