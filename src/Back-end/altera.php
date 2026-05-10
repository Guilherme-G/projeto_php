<?php
require_once 'conecta.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $stmt = $pdo->prepare("
        UPDATE livros 
        SET TITULO = ?, AUTOR = ?, CATEGORIA = ?, DATA_PUBLICACAO = ?, QUANTIDADE = ?
        WHERE ID_LIVRO = ?
    ");

    $stmt->execute([
        $_POST['titulo'],
        $_POST['autor'],
        $_POST['categoria'],
        $_POST['data_publicacao'],
        $_POST['quantidade'],
        $_POST['id_livro']
    ]);

    header("Location: relatorio.php?msg=sucesso");
    exit;
}

// Pega o ID da URL
$id = $_GET['id'] ?? 0;

// Busca o livro
$stmt = $pdo->prepare("SELECT * FROM livros WHERE ID_LIVRO = ?");
$stmt->execute([$id]);

$l = $stmt->fetch();

include_once 'header.php';
?>