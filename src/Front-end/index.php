<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Produtos</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <style>#login {
    width: 270px;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    text-align-last: left;
}

#senha {
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
#login_box {
    text-align-last: center;
    width: 300px;
    margin: 100px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #ffffff;
}
.logo_login {
    width: 200px;
    border-radius: 10px;
}</style>
</head>
<body>

<div class="navbar_container">
        <nav>
            <a href="home.php"><img src="img/LOGO.png" class="logo"></a>
            <ul class="navbar_itens">
                <li><a href="home.php">Início</a></li>
            </ul>
        </nav>

        <form method="post" action=""> <!-- method = método seguro action = recebe vai o formulário -->
        <div id="login_box">

            <img class="logo_login" src="img/LOGO.png" alt="Logo"><br>
            <!--<h1 class="nome_projeto">BookSystem</h1>-->
            <br> <br> <br>
            Login <br> <input type="text" id="login" name="login"><br> <!-- login -->
            Senha <br> <input type="password" id="senha" name="senha"><br><br> <!-- senha -->
             <!--<a href="/home.php" id="submit">Validar</a>--> 
            <input id="submit" type="submit" value="Entrar">  <!-- botão validar -->
            <br><br>
            <a href="cadastro.php" id="cadastro">Não tem uma conta? Cadastre-se</a> <!-- link para cadastro -->
        </div>




    </form>

    </div>