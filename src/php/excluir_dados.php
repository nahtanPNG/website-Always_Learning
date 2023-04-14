<?php

include "conexao.php";

$id = $_GET["id"];

mysqli_query($sql,"delete from usuário where id = $id");
header("Location: listar.php");
?>