<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livro</title>
    <link rel="stylesheet" href="/style/style.css">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
</head>

<body>
    <form method="post" action="recebe_livro.php">
        <div id="login_box">

        <img class="logo" src="/img/LOGO.png" alt="Logo"><br>    
        <h2>Cadastro de Livro</h2>
            <br>

            Nome do Livro <br>
            <input type="text" id="nome_livro" name="nome_livro"><br>

            Autor do Livro <br>
            <input type="text" id="autor" name="autor"><br>

            Sinopse <br>
            <textarea id="sinopse" name="sinopse"></textarea><br>

            Editora <br>
            <input type="text" id="editora" name="editora"><br><br>

            <input id="submit" type="submit" value="Cadastrar">

        </div>
    </form>
</body>

</html>