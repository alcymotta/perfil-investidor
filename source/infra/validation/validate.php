<?php
include_once("../../infra/db/functions.php");
session_start();
//transformando os indices do array de requisição (GET e POST) em variáveis com o mesmo nome 
foreach ($_REQUEST as $key => $value) {
    $$key = $value;
}

$page = "";

echo "<pre>";
print_r($_POST);
echo "</pre>";
echo "action=> " .$validaSessao;
exit();

if($action === 'Login') {
    $result = userValite($usuario, $senha);
    if(!empty($result)) {
        $_SESSION = $result;
        $page = "painel.php";
    } else {
        $page = "painel_login.php";
    }
}

if($action === 'Cadastrar') {
    createUser($_POST);
    $_SESSION['status_cadastro'] = true;
    $page = "cadastro.php";
}

// if(empty($_SESSION['usuario'])) {
//     echo $_SESSION['usuario'];
//     $page = "painel_login.php";
// }

header("location: ../../pages/$page");
?>