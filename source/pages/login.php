<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: ../painel_login.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select * from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

echo "<pre>";
print_r($result);
echo "</pre>";

if($row == 1) {
     $_POST['usuario'] = $usuario;
     header('Location: ../painel.php');
     exit();
 } else {
     $_POST['nao_autenticado'] = true;
     header('Location: ../painel_login.php');
     exit();
 }