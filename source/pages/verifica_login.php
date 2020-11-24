<?php
if(!$_SESSION['usuario']) {
    header('Location: ../painel_login.php');
    exit();
}
?>