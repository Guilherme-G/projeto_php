<?php
require_once 'conecta.php'; //conexão

$usuario_id = 10;
$produto_id = 10;

//envio formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $stmt = $pdo->prepare("
        INSERT INTO produtos (id, nome, quantidade, usuario_id)
        VALUES (?, ?, ?, ?)   
    ");    //inserção banco

    $stmt->execute([
        $produto_id,
        'Produto Fixo',         
        1,
        $usuario_id
    ]);      //insere valores

    header("Location: relatorio.php");    //redireciona
}
?>

<h2>Criar Produto Fixo</h2>

<form method="POST">          //cadastro
    <button type="submit">Criar Produto</button>
</form>