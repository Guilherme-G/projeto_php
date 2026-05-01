<?php
$host = 'git hub';                                      // variaveis para o banco 
$db = 'MySQL';                                                                          
$user = 'id do usuario';
$pass = 'senha do usuario';                            // variaveis do usuario 
$nome = 'nome do usuario';
$email = 'email';

$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";    // variavel para a conexão com o banco                                

try {
    $pdo = new PDO($dsn, $email, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,                            
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);                                                                  // a conexão com o banco // $e agora é $erro
} catch (PDOException $erro) {                                              
    die("Erro de conexão: " . $erro->getMessage());
};                                                                      // mensagem de error 
?>