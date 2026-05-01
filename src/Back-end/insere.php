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
<form method="POST">
    <input type="text" name="nome" placeholder="Nome" required><br><br>
    <input type="number" step="0.01" name="preco" placeholder="Preço" required><br><br>
    <input type="number" name="quantidade" placeholder="Quantidade" required><br><br>
    <button type="submit">Salvar</button>
</form>
<?php include_once 'footer.php'; ?>