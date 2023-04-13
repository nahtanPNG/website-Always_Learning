<?php
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_DEFAULT);
if($btnCadUsuario){
	include_once 'conexao.php';
	$dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
	
	$erro = false;
	
	$dados_st = array_map('strip_tags', $dados_rc);
	$dados = array_map('trim', $dados_st);
	
	if(in_array('',$dados)){
		$erro = true;
		$_SESSION['msg'] = "Necessário preencher todos os campos";
	}elseif((strlen($dados['senha'])) < 6){
		$erro = true;
		$_SESSION['msg'] = "A senha deve ter no minímo 6 caracteres";
	}elseif(stristr($dados['senha'], "&")) {
		$erro = true;
		$_SESSION['msg'] = "Caracter ( & ) utilizado na senha é inválido";
		
	}else{
		$result_usuario = "SELECT id FROM usuário WHERE usuario='". $dados['usuario'] ."'";
		$resultado_usuario = mysqli_query($sql, $result_usuario);
		if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
			$erro = true;
			$_SESSION['msg'] = "Este usuário já está sendo utilizado";
		}
		
		$result_usuario = "SELECT id FROM usuário WHERE email='". $dados['email'] ."'";
		$resultado_usuario = mysqli_query($sql, $result_usuario);
		if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
			$erro = true;
			$_SESSION['msg'] = "Este e-mail já está cadastrado";
		}
	}
	
	
	//var_dump($dados);
	if(!$erro){
		//var_dump($dados);
		$dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
		
		$result_usuario = "INSERT INTO usuário (nome, email, usuario, senha) VALUES (
						'" .$dados['nome']. "',
						'" .$dados['email']. "',
						'" .$dados['usuario']. "',
						'" .$dados['senha']. "'
						)";
		$resultado_usario = mysqli_query($sql, $result_usuario);
		if(mysqli_insert_id($sql)){
			$_SESSION['msgcad'] = "Usuário cadastrado com sucesso";
			header("Location: login.php");
		}else{
			$_SESSION['msg'] = "Erro ao cadastrar o usuário";
		}
	}
	
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Always Learning - Cadastrar</title>
</head>
<body>

<div class="telaLogin">
    <img src="../../assets/imagem_login.png" alt="pessoa usando computador">
    <form class="form" type="text" method="post" action="">
        <h1 class="titulocadastrar">Cadastrar</h1>  
        <input type="text" name="nome" placeholder="Digite o nome e o sobrenome"><br>
        <input type="email" name="email" placeholder="Digite o seu e-mail"><br>
        <input type="text" name="usuario" placeholder="Digite o seu usuário"><br>
        <input type="password" name="senha" placeholder="Digite a sua senha"><br>
        <input type="submit" name="btnCadUsuario" class="btnCad" value="Cadastrar"><br><br>

        <div style="margin-top: 28px;">
            Já possui uma conta?<a href="login.php">Clique aqui </a> para logar
        </div>
    </form>
</div>

</body>
</html>