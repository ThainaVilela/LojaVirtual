<?php
session_start();
//deslogando usuário
session_destroy();
//voltando para home
header("Location:index.php");

?>