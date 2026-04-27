<?php
require_once 'conecta.php';

/*if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("UPDATE produtos SET nome=?, preco=?, quantidade=? WHERE id=?");
    $stmt->execute([$_POST['nome'], $_POST['preco'], $_POST['quantidade'], $_POST['id']]);
    header("Location: relatorio.php?msg=sucesso");
    exit;
}

$id = $_GET['id'] ?? 0;
$stmt = $pdo->prepare("SELECT * FROM produtos WHERE id = ?");
$stmt->execute([$id]);
$p = $stmt->fetch();

include_once 'header.php';*/                                                                                                                       // Base para o código 
?>
<!--<h2>Alterar Produto</h2>
<form method="POST">
    <input type="hidden" name="id" value="<?//= $p['id'] ?>">
    <input type="text" name="nome" value="<?//= $p['nome'] ?>" required><br><br>
    <input type="number" step="0.01" name="preco" value="<?//= $p['preco'] ?>" required><br><br>
    <input type="number" name="quantidade" value="<?//= $p['quantidade'] ?>" required><br><br>
    <button type="submit">Atualizar</button>
</form>-->
<?//php include_once 'footer.php'; ?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração</title>
</head>
<body>
   <input type="hidden" name="id" value="<?= $p['id'] ?>"> <!-- Envia o ID do produto escondido -->

<input type="text" name="nome" value="<?= $p['nome'] ?>" required> <!-- Campo para editar o nome já preenchido e obrigatório -->

<input type="number" step="0.01" name="preco" value="<?= $p['preco'] ?>" required> <!-- Campo para preço com decimal, já preenchido e obrigatório -->

<input type="number" name="quantidade" value="<?= $p['quantidade'] ?>" required> <!-- Campo para quantidade já preenchido e obrigatório -->

<button type="submit">Atualizar</button> <!-- Botão que envia o formulário -->

</body>
</html>