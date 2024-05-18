<?php
$banco = "db";
$username = "root";
$password = "Senha123";
$database = "testedb";

$conexao = new mysqli($banco, $username, $password, $database);
if(!$conexao) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
echo "Conexao com banco de dados OK";
mysqli_close($conexao);

?>
