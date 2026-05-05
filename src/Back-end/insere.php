<?php
require_once 'conecta.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {                                    //variavel para enviar o formulario 

    try {
        $stmt = $pdo->prepare("INSERT INTO produtos (titulo, autor, categoria, data_livro, preco, quantidade, ) VALUES (?, ?, ?, ?, ?, ?)"); // parte para adicionar o INSERT e os VALUES(eles estão com o simbolo ? para o usuario colocar e não o banco de dados )
        $stmt->execute([$_POST['titulo'],$_POST['autor'],$_POST['categoria'],$_POST['data'], $_POST['preco'], $_POST['quantidade']]); // comandos para executar 
        header("Location: relatorio.php?msg=sucesso");                                                                                  // manda as informações para para a parte relatorio.php e se caso der erro volte 
        exit;                                                                                    // quando o cliente acabar sair da pagina  
    } catch (Exception $erro) {
        header("Location: relatorio.php?msg=erro");                                     // comando de erro 
    }
}
include_once 'header.php';                                              // inclue um arquivo de cabeçalho para o comando 
?>
<h2>Cadastrar Produto</h2>
<!-- Titulo da pagina -->
 <h2>Cadastrar Livro<h2>

 <!-- Inicio do formulario -->
<!-- method "POST" para que os dados sejam enviados de forma "escondida -->
<form method="POST">

<!-- Campo de texto para o titulo do livro
<!-- name="titulo" é o nome usado para pegar esse valor -->
<!-- placeholder é o texto que aparece dentro dos campos
 <!-- required = campo obrigatorio -->
  <input type="text" name="titulo" placeholder="Titulo" required><br><br>

<!-- campo para o nome do Autor -->
 <input type="text" name="autor" placeholder="Autor" required><br><br>
 
 <!-- Campo para a categoria do livro -->
<input type="text" name="categoria" placeholder="Categoria" required><br><br>

<!-- Campo numerico ara o ano de publicacao -->
 <!-- type=number só permite NUMEROS -->
  <input type="number" name="data_publicacao" placeholder="Ano de Publicação" required><br><br>

<!-- campo numerico para a quantidade em estoque -->
 <input type="number" name="quantidade" placeholder="Quantidade" required><br><br>

 <!-- botao que envia o formulario -->
<!-- Quando clicado, envia os dados todos para o PHP -->
 <button type="submit">Salvar</button>

</form>
<?php include_once 'footer.php'; ?>