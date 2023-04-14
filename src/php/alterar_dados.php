<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Always Learning - Alterar Dados</title>
</head>
<body>

    <?php

    include "conexao.php";

    $id = $_GET['id'];
    $query = mysqli_query($sql, "select * from usuário where id= $id");
    $row = mysqli_fetch_array($query);
    ?>

<div class="telaLogin">
    <img src="../../assets/imagem_login.png" alt="pessoa usando computador">
    <form class="form" type="text" method="post" action="salvar_alteracao.php">
        <h1 class="titulocadastrar">Altere Seus Dados</h1>  

        <input type="hidden" name="id" value="<?php echo $row['id'];?>">

        <input type="text" name="nome" value="<?php echo $row['nome'];?>"> <br>
        <input type="email" name="email"value="<?php echo $row['email'];?>"> <br>
        <input type="text" name="usuario" value="<?php echo $row['usuario'];?>"> <br>
        <input type="password" name="senha" value="<?php echo $row['senha'];?>"> <br>

        <input type="submit" name="btnCadUsuario" class="btnCad" value="Alterar Dados"><br><br>
    </form>
</div>

</body>
</html>