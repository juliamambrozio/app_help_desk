<?php

session_start();
if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'Sim'){
  header('Location: index.php?login=erro2');
  
} //se o login for errado e não salvar as informações, irá ser redireiconado ao login
?>