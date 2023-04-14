<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../../assets/icon_escada.png"/>
    <title>Perfil</title>
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

    <div class="container_perfil">
        <div class="sidebar">
            <div class="perfil_sidebar">
                <img src="../../assets/perfil.png" alt="ícone perfil">
                <div class="perfil_sidebar_texto">
                    <?php
                    session_start();
                
                    if(isset($_SESSION['nome']) && isset($_SESSION['email'])) {
                        $nome = $_SESSION['nome'];
                        $email = $_SESSION['email'];
                        
                        echo "<p>$nome</p>";
                        echo "<p>$email</p>";
                    } else {
                        echo "<p>Você não está logado.</p>";
                    }
                    ?>
                </div>
            </div>
    
            <a href="listar.php">Listagem de Dados</a>
        </div>
    
        <div class="provas">
            <div class="suas_provas">
                <h1>SUAS PROVAS</h1>
                <p>Curso JavaScript</p>
                </span>
            </div>
        </div>
    </div>

<script src="src/js/script.js"></script>
</body>
</html>