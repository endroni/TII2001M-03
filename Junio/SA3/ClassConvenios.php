<?php

try{
    $ca = new PDO ("mysql:host=localhost;dbname=dbconvenios;","root","");
}catch (PDOException $e) {
    echo "Erro no banco: " . $e->getMessage();
}

    if(isset($_POST['Nome_Fantasia'],$_POST['CNPJ'],$_POST['Nome_Empresa'],$_POST['Email'],$_POST['Nome_Contato'],$_POST['Home_Page'],$_POST['Telefone_1'],$_POST['Telefone_2'],$_POST['db_Data'])){
        $Nome_Fantasia = htmlspecialchars ($_POST['Nome_Fantasia']);
        $CNPJ = addslashes ($_POST['CNPJ']);
        $Nome_Empresa  = addslashes ($_POST['Nome_Empresa']);
        $Email  = addslashes ($_POST['Email']);
        $Nome_Contato  = addslashes ($_POST['Nome_Contato']);
        $Home_Page  = addslashes ($_POST['Home_Page']);
        $Telefone_1  = addslashes ($_POST['Telefone_1']);
        $Telefone_2  = addslashes ($_POST['Telefone_2']);
        $Data  = addslashes ($_POST['db_Data']);
    }
        $var = $ca->prepare("INSERT INTO tbl_convenios(Nome_Fantasia, CNPJ, Nome_Empresa, Email,Nome_Contato,Home_Page,Telefone_1,Telefone_2,db_Data) 
        VALUES (:n,:c,:ne,:e,:nc,:h,:t1,:t2,:dt)");
        $var->bindValue(":n", $Nome_Fantasia);
        $var->bindValue(":c", $CNPJ);
        $var->bindValue(":ne", $Nome_Empresa );
        $var->bindValue(":e", $Email );
        $var->bindValue(":nc", $Nome_Contato );
        $var->bindValue(":h", $Home_Page );
        $var->bindValue(":t1", $Telefone_1 );
        $var->bindValue(":t2", $Telefone_2 );
        $var->bindValue(":dt", $Data );
        $var->execute();
    echo "Dados enviados ao banco!!!";


if(isset($_POST['Nome_Fantasia'],$_POST['CNPJ'],$_POST['Nome_Empresa'],$_POST['Email'],$_POST['Nome_Contato'],$_POST['Home_Page'],$_POST['Telefone_1'],$_POST['Telefone_2'],$_POST['db_Data'])){
  $Nome_Fantasia = htmlspecialchars ($_POST['Nome_Fantasia']);
    
  $var = $ca->prepare("DELETE FROM tbl_convenios WHERE  = Nome_Fantasia = :n");
 $var->bindValue(":n", $Nome_Fantasia);
 $var->execute();
 }

 if(isset($_POST['Nome_Fantasia'],$_POST['CNPJ'],$_POST['Nome_Empresa'],$_POST['Email'],$_POST['Nome_Contato'],$_POST['Home_Page'],$_POST['Telefone_1'],$_POST['Telefone_2'],$_POST['db_Data'])){
    $Nome_Contato = htmlspecialchars ($_POST['Nome_Contato']);
      
    $var = $ca->prepare("UPDATE FROM tbl_convenios WHERE  = Nome_Contato = :nc");
   $var->bindValue(":nc", $Nome_Contato);
   $var->execute();
   }
  
   if(isset($_POST['Nome_Fantasia'],$_POST['CNPJ'],$_POST['Nome_Empresa'],$_POST['Email'],$_POST['Nome_Contato'],$_POST['Home_Page'],$_POST['Telefone_1'],$_POST['Telefone_2'],$_POST['db_Data'])){
    $Nome_Contato = htmlspecialchars ($_POST['Nome_Contato']);
      
    $var = $ca->prepare("SELECT FROM tbl_convenios WHERE  = Telefone_1 = :t1");
   $var->bindValue(":t1", $Telefone_1);
   $var->execute();
   }

?>




