<?php
require_once 'conecta.php';

$usuario_id = 10;
$produto_id = 10;

$stmt = $pdo->prepare("
    DELETE FROM produtos 
    WHERE id = ? AND usuario_id = ?               
");           //comando de exclusão

$stmt->execute([$produto_id, $usuario_id]);       //executa exclusão

header("Location: relatorio.php");          //redireciona