<?php
require_once 'conecta.php';

$usuario_id = 10;
$produto_id = 10;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $stmt = $pdo->prepare("
        UPDATE produtos 
        SET quantidade = 1 
        WHERE id = ? AND usuario_id = ?
    ");          //atualiza

    $stmt->execute([$produto_id, $usuario_id]);       //executa atualização

    header("Location: relatorio.php");       //back to relatorio
}
?>

<h2>Atualizar Produto</h2>

<form method="POST">
    <button type="submit">Atualizar quantidade = 1</button>
</form>