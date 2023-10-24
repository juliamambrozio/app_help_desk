<?php
session_start(); //para ter acesso, sempre precisa istartala

//print_R($_SESSION);

//remover índices do array de sessão
//unset() //remove só um índice se caso ele existir

//destruir a variável de sessão
//session_destroy() //forçar um redirecionamento

session_destroy();
header('Location: index.php');

?>