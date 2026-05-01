<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
/* $id_usuario = "Usuario";$nome = "Nome";  $ra = "RA";$senha = "Senha";$email = "Email";$telefone= "Telefone";                                    
$pass = "Mysql: $email ,$senha, $ra, "; 


$conn = new mysqli ($id_usuario,$nome,$pass,$telefone);  // new mysqli é o banco de dados(mudar depois para oq vai ser usado)          //Esse é o código do meu jeito
 
if($conn->connect_error){
    echo"falha na conexão";                                //se caso der error
}

echo "Conectado com sucesso";                              //se caso não estiver com erro no login
$conn->close();*/                                            // e fechar a tela de login
?>


//modificar todos



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


<?php /*
$id_registro = "Numero de ragistro";
$id_usuario = "Usuario";
$id_livro = "Livro";                                   // variaveis do livro
$data_retirada = "Data de retirada ";
$data_entrega = "Data da entrega";
$status = "Status";

$conn = new mysqli($id_livro,$id_usuario,$id_registro,$data_retirada,$data_entrega,$status);   // conexão com o banco de dados

if ($conn->connect_error){
    echo"Livro não encontrado";        
}                                                          // Livro mão encontrado

echo "Livro encontrado ";
$conn->close();                                                // livro encontrado 
*/
?>



echo "<h1>Livro adicionado com sucesso!</h1>";
            
?>

<?php
/*require_once 'conecta.php';
$produtos = $pdo->query("SELECT * FROM produtos ORDER BY nome")->fetchAll();

// Sistema de Mensagens
$status = $_GET['msg'] ?? '';                                                                      // parte Lucas
$mensagens = [
    'sucesso' => 'Ação realizada com sucesso!',
    'excluido' => 'Produto removido do sistema.',
    'erro' => 'Erro ao processar solicitação.',
    'tabela_pronta' => 'Banco de dados configurado!'
];

include_once 'header.php';
*/
?>

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

<?php /*
require_once 'conecta.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("DELETE FROM produtos WHERE id = ?");
    $stmt->execute([$_POST['id']]);                                                                     // parte lucas
    header("Location: relatorio.php?msg=excluido");
    exit;
}
*/
?>


</body>
</html>

