
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de livro</title>
</head>
<body>
    


<?php
require_once 'conecta.php';                                 // abriu a conexão com o banco 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {                // o jeito que vai conectar (POST) 

    $stmt = $pdo->prepare("                                
        UPDATE livros 
        SET TITULO = ?, AUTOR = ?, CATEGORIA = ?, DATA_PUBLICACAO = ?, QUANTIDADE = ?
        WHERE ID_LIVRO = ?
    ");                                         // vai preparar os dados do livro para um update  






$l = $stmt->fetch();

    $stmt->execute([                                    // oq vai executar 
        $_POST['titulo'],
        $_POST['autor'],
        $_POST['categoria'],
        $_POST['data_publicacao'],
        $_POST['quantidade'],
        $_POST['id_livro']
    ]);

if (empty($_POST['titulo'])) {                                          // confere se não tem nada em branco, se caso tiver aparece erros 
    $erros[] = "Título obrigatório";
};
if (empty($_POST['autor'])) {
    $erros[] = "Autor obrigatório";
};
if (empty($_POST['categoria'])) {
    $erros[] = "Categoria obrigatória";                                     // essas partes é bom ter um front-end
};
if (empty($_POST['data_publicacao'])) {
    $erros[] = "Data de Publicação obrigatória";
};
if (empty($_POST['quantidade'])) {
    $erros[] = "Quantidade obrigatória";
};
if (empty($_POST['id_livro'])) {
    $erros[] = "ID é obrigatório";
};

if (!empty($erros)) {                                   // aparece todos os que estão com erros 
    print_r($erros);
    exit;
};

    header("Location: relatorio.php?msg=sucesso");                 // manda para o relatorio local 
    exit;


};

                                            
$id = $_GET['id'] ?? 0;               // Pega o ID da URL


$stmt = $pdo->prepare("SELECT * FROM livros WHERE ID_LIVRO = ?");       //busca o livro pela a id
$stmt->execute([$id]);                                                  // executa os dados achados pela a id

$l = $stmt->fetch();                    //Pega os dados direto do banco 

include_once 'header.php';    // cria p header para a conexão com o html 


$stmt = $pdo->prepare("SELECT * FROM livros WHERE ID_LIVRO = ?");           //(SELECT * FROM livros WHERE ID_LIVRO) vai puxar essa linha do SELECT no banco
$stmt->execute([$id]);                 // executar 

echo $l['tiutulo'];                                // oq vai aparecer (eu achei meio feio, mas vida que segue._.)
echo "<br>";
echo $l['autor'];
echo "<br>";
echo $l['categoria'];
echo "<br>";
echo $l['data_publicacao'];
echo "<br>";
echo $l['quantidade'];
echo "<br>";
echo $l['tiutulo'];
echo "<br>";

?>
</body>
</html>

