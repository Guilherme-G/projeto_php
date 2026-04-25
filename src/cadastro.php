<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro - Sistema de Produtos</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <style>
        /* Estilos baseados no seu login */
        #login_box {
            text-align-last: center;
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #ffffff;
        }

        #email, #login, #senha {
            width: 270px;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align-last: left;
        }

        #submit {
            background-color: #1500fd;
            width: 100%;
            padding: 10px;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .logo_login {
            width: 200px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="navbar_container">
    <nav>
        <a href="home.php"><img src="img/LOGO.png" class="logo"></a>
        <ul class="navbar_itens">
            <li><a href="home.php">Início</a></li>
        </ul>
    </nav>

    <form method="post" action="cadastrar_usuario.php"> 
        <div id="login_box">
            <img class="logo_login" src="img/LOGO.png" alt="Logo"><br>
            <br> <br>

            Email <br> 
            <input type="email" id="email" name="email" required><br>

            Login <br> 
            <input type="text" id="login" name="login" required><br>

            Senha <br> 
            <input type="password" id="senha" name="senha" required><br><br>

            <input id="submit" type="submit" value="Cadastrar">
            
            <br><br>
            <a href="login.php">Já tem uma conta? Logar</a>
        </div>
    </form>
</div>

</body>
</html>