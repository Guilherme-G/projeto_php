



<?php
require_once 'conecta.php';                                     //conexão com o sql 
$sql = "CREATE TABLE IF NOT EXISTS livros (                                 
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100) NOT NULL,
    autor VARCHAR(100) NOT NULL,                                
    categoria VARCHAR(20)NOT NULL, 
    data_livro DATE NOT NULL,                       
    preco DECIMAL(10,2) NOT NULL,
    quantidade INT DEFAULT 0
)";                                                            // dados do livro                                            
$pdo->exec($sql);                                              // execução no sql

echo "<h1>Livro adicionado com sucesso!</h1>";            
?>