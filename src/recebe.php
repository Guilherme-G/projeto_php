
<?php
echo "<h1>Recebe</h1>";
echo "<pre>";
print_r($_POST);//print_r($_GET); mostra os dados do formulário na url
echo "</pre>";
$login=$_POST["login"];
$senha=$_POST["senha"];

echo "Login: <b>$login</b><br>";
echo "Senha: <b>$senha</b><br>";
?>