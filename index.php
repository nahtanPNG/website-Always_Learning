<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Always Learning - Login</title>
</head>
<body>
    <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        if(isset($_SESSION['msgcad'])){
            echo $_SESSION['msgcad'];
            unset($_SESSION['msgcad']);
        }
    ?>
<div class="telaLogin">
    <img src="assets/imagem_login.png" alt="pessoa usando computador">
    <form class="form" type="text" method="post" action="src/php/valida.php">
        <h1 class="titulocadastrar">Login</h1>  
        <input type="text" name="usuario" placeholder="Digite o seu usuário"><br>
        <input type="password" name="senha" placeholder="Digite a sua senha"><br>
        <input type="submit" name="acessar" class="btnCad" value="Acessar"><br><br>

        <div style="margin-top: 28px;">
            Não possui uma conta?<a href="src/php/cadastrar.php">Clique aqui </a> para logar
        </div>
    </form>
</div>
</body>
</html>