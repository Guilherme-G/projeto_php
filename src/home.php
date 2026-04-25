<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>BookSystem</title>
</head>
<body>

    <div class="navbar_container">
        <nav>
            <img src="img/LOGO.png" class="logo">

            <ul class="navbar_itens">
                <li><a href="home.php">Início</a></li>
                <li><a href="index.php" class="default-btn">Entrar</a></li>
                <li><a href="header.php">Carrinho (<span id="cart-count">0</span>)</a></li>
            </ul>
        </nav>
    </div>

    <main>
        <section class="hero">

            <div class="hero_container">
                <h1>Bem-vindo ao BookSystem</h1>
                <p>Encontre os melhores livros para sua leitura</p>
            </div>

            <div class="menu_livros">
                
                <div class="menu_livro">
                    <form action="carrinho_processar.php" method="post">
                        <img src="img/Livro_Algorítimo.jpg" alt="Entendendo Algoritmos">
                        <h2>Entendendo Algoritmos</h2>
                        <p>Um guia prático para compreender algoritmos</p>
                        <div class="price">R$50,00</div>
                        
                        <input type="hidden" name="livro_nome" value="Entendendo Algoritmos">
                        <input type="hidden" name="livro_preco" value="50.00">
                        
                        <button type="submit" name="add_to_cart" class="add_cart">Adicionar</button>
                    </form>
                </div>

                <div class="menu_livro">
                    <form action="carrinho_processar.php" method="post">
                        <img src="img/Livro_Banco_Dados.jpg" alt="Banco de Dados">
                        <h2>Banco de Dados</h2>
                        <p>Domine conceitos essenciais de banco de dados</p>
                        <div class="price">R$50,00</div>
                        
                        <input type="hidden" name="livro_nome" value="Banco de Dados">
                        <input type="hidden" name="livro_preco" value="50.00">
                        
                        <button type="submit" name="add_to_cart" class="add_cart">Adicionar</button>
                    </form>
                </div>

                <div class="menu_livro">
                    <form action="carrinho_processar.php" method="post">
                        <img src="img/Livro_PHP.jpg" alt="PHP para Iniciantes">
                        <h2>PHP para Iniciantes</h2>
                        <p>Aprenda PHP do zero de forma prática</p>
                        <div class="price">R$50,00</div>
                        
                        <input type="hidden" name="livro_nome" value="PHP para Iniciantes">
                        <input type="hidden" name="livro_preco" value="50.00">
                        
                        <button type="submit" name="add_to_cart" class="add_cart">Adicionar</button>
                    </form>
                </div>

            </div>
        </section>
    </main>

</body>
</html>