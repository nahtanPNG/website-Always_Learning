<?php

include "conexao.php";
session_start();
           
    $hoje = date('d/m/y');
    $nome = $_SESSION['nome'];
    $nota = 0;

    $p1 = $_POST['p1'];
    $p2 = $_POST['p2'];
    $p3 = $_POST['p3'];
    $p4 = $_POST['p4'];
    $p5 = $_POST['p5'];
    $p6 = $_POST['p6'];
    $p7 = $_POST['p7'];
    $p8 = $_POST['p8'];
    $p9 = $_POST['p9'];
    $p10 = $_POST['p10'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../../assets/icon.png" type="image/x-icon">
    <title>Always Learning - Teste JavaScript</title>
</head>
<body>
    <div class="navbar">
        <nav class="menu">
            <div class="menu_esquerda">
                <a href="../../index.php" class="icon_home">
                    <img src="../../assets/icon.png" alt="icone Always Learning">
                </a>
                <a href="../../cursos.html">Cursos</a>
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

    <section class="respostas">
        <h1><?php
            Echo "Nome: ".$nome."<br>";
            Echo "Data: ".$hoje."<br>";
        ?></h1>
    <div class="p_r">
            <h2>1 - O que é o DOM?</h2>
            <h3> Resposta correta: A) Uma representação em árvore dos elementos HTML em uma página web. <br> </h3>
            <?php
                 if($p1 == "a"){
                    Echo" Sua resposta está correta <br>";
                    $nota = $nota +1;
                } else{
                    Echo" Sua resposta está incorreta <br>";
                }
            ?>
    </div>
    <div class="p_r">
            <h2>2 -  O que permite que o JavaScript interaja com os elementos HTML na página?</h2>
            <h3> Resposta correta: C) O DOM. <br> </h3>
            <p><?php
                if($p2 == "c"){
                    Echo" Sua resposta está correta <br>";
                    $nota = $nota +1;
                } else{
                    Echo" Sua resposta está incorreta <br>";
                }
                ?>
            </p>
    </div>
    <div class="p_r">
            <h2>3 - Como o JavaScript manipula o DOM?</h2>
            <h3> Resposta correta: B) Utilizando uma série de métodos e propriedades. <br> </h3>
            <p><?php
                if($p3 == "b"){
                    Echo" Sua resposta está correta <br>";
                    $nota = $nota +1;
                } else{
                    Echo" Sua resposta está incorreta <br>";
                }
                ?>
            </p>
    </div>
    <div class="p_r">
            <h2>4 - Quem criou o JavaScript?</h2>
            <h3> Resposta correta: A) Brendan Eich. <br> </h3>
            <p><?php
                if($p4 == "a"){
                    Echo" Sua resposta está correta <br>";
                    $nota = $nota +1;
                } else{
                    Echo" Sua resposta está incorreta <br>";
                }
                ?>
            </p>
    </div>
    <div class="p_r">
            <h2>5 - Para qual navegador foi criado o JavaScript?</h2>
            <h3> Resposta correta: B) Netscape Navigator. <br> </h3>
            <p><?php
                if($p5 == "b"){
                    Echo" Sua resposta está correta <br>";
                    $nota = $nota +1;
                } else{
                    Echo" Sua resposta está incorreta <br>";
                }
                ?>
            </p>
    </div>
    <div class="p_r">
            <h2>6 - Como era chamada a linguagem de script inicialmente criada por Brendan Eich?</h2>
            <h3> Resposta correta: B) Mocha. <br> </h3>
            <p><?php
                if($p6 == "b"){
                    Echo" Sua resposta está correta <br>";
                    $nota = $nota +1;
                } else{
                    Echo" Sua resposta está incorreta <br>";
                }
                ?>
            </p>
    </div>
    <div class="p_r">
            <h2>7 - A sintaxe básica do JavaScript é rigorosa em relação à tipagem de dados?</h2>
            <h3> Resposta correta: A) Não, é uma sintaxe flexível <br> </h3>
            <p><?php
                if($p7 == "a"){
                    Echo" Sua resposta está correta <br>";
                    $nota = $nota +1;
                } else{
                    Echo" Sua resposta está incorreta <br>";
                }
                ?>
            </p>
    </div>
    <div class="p_r">
            <h2>8 - Como as funções em JavaScript são definidas?</h2>
            <h3> Resposta correta: Utilizando a palavra-chave "function", seguida pelo nome da função e uma lista de argumentos entre parênteses. <br> </h3>
            <p><?php
                if($p8 == "c"){
                    Echo" Sua resposta está correta <br>";
                    $nota = $nota +1;
                } else{
                    Echo" Sua resposta está incorreta <br>";
                }
                ?>
            </p>
    </div>
    <div class="p_r">
            <h2>9 - O que são argumentos em uma função JavaScript?</h2>
            <h3> Resposta correta: A) Valores que são passados para a função quando ela é chamada. <br> </h3>
            <p><?php
                if($p9 == "a"){
                    Echo" Sua resposta está correta <br>";
                    $nota = $nota +1;
                } else{
                    Echo" Sua resposta está incorreta <br>";
                }
                ?>
            </p>
    </div>
    <div class="p_r">
            <h2>10 - As funções em JavaScript podem retornar valores?</h2>
            <h3> Resposta correta: A) Sim. <br> </h3>
            <p><?php
                if($p10 == "a"){
                    Echo" Sua resposta está correta <br>";
                    $nota = $nota +1;
                } else{
                    Echo" Sua resposta está incorreta <br>";
                }
                ?>
            </p>
    </div>
    <h1><?php Echo "Nota: ".$nota."<br>"; 
        $sql -> query("Insert into prova(nome, data, nota)value('$nome', '$hoje', '$nota')");
        ?>
    </h1>

    <div class="provabtn">
                <a href="../../index.php">
                    <input class="btn_realizar_prova" type="submit" value="Voltar">
                </a>
            </div>
    </section>