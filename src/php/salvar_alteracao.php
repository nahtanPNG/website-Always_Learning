<?php

include "conexao.php";

    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $usuario  = $_POST["usuario"];
    $senha = $_POST["senha"];

   $sql ->query("update usuário set nome='$nome', email='$email', usuario='$usuario', senha='$senha' where id = $id");
   header("Location: login.php");
?>