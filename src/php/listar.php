<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../../assets/icon_escada.png"/>
    <title>Listagem de Dados</title>
</head>
<body>
<div class="navbar">
        <nav class="menu" style="position: absolute;">
            <div class="menu_esquerda">
                <a href="../../index.php" class="icon_home">
                    <img src="../../assets/icon.png" alt="icone Always Learning">
                </a>
                <a href="../../cursoJS.html">Cursos</a>
            </div>
            <div class="menu_direita">
                <a href="perfil.php">
                    Perfil
                </a>
                <a href="sair.php">
                    <input class="btn_cadastrar" type="button" value="Sair">
                </a>
            </div>
        </nav>
    </div>
    
<?php
        include "conexao.php";//inclui o código de conexão para dentrro desse arquivo
        $query = mysqli_query($sql, "select * from usuário");//faz uma busca no bnco de dados na tabela pet
    ?>
    <div class="tabela_dados">

    <h1>Listagem de Dados - Usuários</h1>
    <table border="1">
    <tr id="linha1">
     <td align="center">Código</td>
     <td align="center">Nome</td>
     <td align="center">Email</td>
     <td align="center">Usuário</td>
     <td align="center">Senha</td>
     <td align="center" colspan="2">Ação</td>
</tr>
<?php
    while($linha = mysqli_fetch_array($query)){
        $id = $linha['id'];
        $nome = $linha['nome'];
        $email = $linha['email'];
        $usuario = $linha['usuario'];
        $senha = $linha['senha'];

        echo"
            <tr>
            <td>$id</td>
            <td>$nome</td>
            <td>$email</td>
            <td>$usuario</td>
            <td>$senha</td>
            <td><a href=\"alterar_dados.php?id=$id\">Editar</a></td>

            <td><a href=\"excluir_dados.php?id=$id\">Excluir</a></td>
            </tr>";
    }
?>

</table>
</div>
</body>
</html>