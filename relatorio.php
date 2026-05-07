<?php
require_once 'conecta.php'; //conexão

$usuario_id = 10;
$produto_id = 10;

// busca produto
$stmt = $pdo->prepare("
    SELECT * FROM produtos 
    WHERE id = ? AND usuario_id = ?
");
$stmt->execute([$produto_id, $usuario_id]);
$produtos = $stmt->fetchAll();

?>

<h1>Produto do Usuário 10</h1>

<table border="1">
<tr> 
    <th>ID</th>         //dados produto
    <th>Nome</th>
    <th>Quantidade</th>
    <th>Ações</th>
</tr>

<?php foreach ($produtos as $p): ?>
<tr>
    <td><?= $p['id'] ?></td>
    <td><?= htmlspecialchars($p['nome']) ?></td>
    <td><?= $p['quantidade'] ?></td>
    <td>
        <a href="altera.php">Editar</a>

        <form action="exclui.php" method="POST">
            <button type="submit">Excluir</button>
        </form>
    </td>
</tr>
<?php endforeach; ?>
</table>