<?php
session_start();
session_destroy();
header('Location: ../painel_login.php');
exit();
?>