<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="title">Cadastro de Paciente</div>
        <section>
            <h2>Cadastrar Paciente</h2>
            <form action="insert.php" method="post">
                <input class="input__text" type="text" name="nome" placeholder="Nome">
                <span></span>
                <input class="input__text" type="text" name="logradouro" placeholder="Logradouro">
                <span></span>
                <input class="input__text" type="text" name="complemento" placeholder="Complemento">
                <span></span>
                <input class="input__text" type="text" name="bairro" placeholder="Bairro">
                <span></span>
                <input class="input__text" type="text" name="CEP" placeholder="CEP" require maxlength="9" minlength="8">
                <span></span>
                <input class="input__text" type="text" name="email" placeholder="Email">
                <span></span>
                <input class="input__text" type="text" name="tl_fixo" placeholder="Telefone Fixo">
                <span></span>
                <input class="input__text" type="text" name="cel" placeholder="Celular">
                <span></span>
                <input class="input__text" type="text" name="tl_sec" placeholder="Telefone Secundario">
                <span></span>
                <input class="button__insert" type="submit" value="Salvar">
            </form>
        </section>

        <section>
            <h2>Atualizar registro de Paciente</h2>
            <form action="update.php" method="post">
                <input class="input__text" type="text" name="id" placeholder="Informe o ID do Paciente">
                <span></span>
                <input class="input__text" type="text" name="nome" placeholder="Nome">
                <span></span>
                <input class="input__text" type="text" name="logradouro" placeholder="Logradouro">
                <span></span>
                <input class="input__text" type="text" name="complemento" placeholder="Complemento">
                <span></span>
                <input class="input__text" type="text" name="bairro" placeholder="Bairro">
                <span></span>
                <input class="input__text" type="text" name="CEP" placeholder="Insira seu CEP ex: 00000-000">
                <span></span>
                <input class="input__text" type="text" name="email" placeholder="Email">
                <span></span>
                <input class="input__text" type="text" name="tl_fixo" placeholder="Telefone Fixo">
                <span></span>
                <input class="input__text" type="text" name="cel" placeholder="Celular">
                <span></span>
                <input class="input__text" type="text" name="tl_sec" placeholder="Telefone Secundario">
                <span></span>
                <input class="button__update" type="submit" value="Atualizar">
            </form>
        </section>

        <section class="container__delete">
            <h2>Deletar registro de Paciente</h2>
            <form action="delete.php" method="post">
                <input type="text" name="id" placeholder="Informe o ID do Paciente">
                <input class="button__delete" type="submit" value="Deletar"><br><br>
            </form>
        </section>

        <section>
            <?php
                $pdo = new PDO('mysql:host=localhost;dbname=clinica','root','');
                $sql = $pdo->prepare("SELECT * FROM tbl_registropaciente;");
                $sql->execute();

                $fetchClientes = $sql->fetchALL();

                foreach ($fetchClientes as $key => $value){
                    echo '<a>'.$value['id_paciente'].' | '.$value['nome'].' | '.$value['logradouro'].
                    ' | '.$value['complemento'].' | '.$value['bairro'].' | '.$value['CEP'].
                    ' | '.$value['email'].' | '.$value['tl_fixo'].' | '.$value['cel'].' | '.$value['tl_sec'].'</a>';
                    echo '<hr>';
                }
            ?>
        </section>
</body>
</html>