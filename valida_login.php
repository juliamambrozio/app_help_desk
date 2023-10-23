<?php

//var que identifica se a autenticação foi aceita

$usuario_autenticado = false;

//usuários do sistema

$usuarios_app = array(
    array('email' => 'adm@teste.com.br', 'senha' => '123456'),
    array('email' => 'user@teste.com.br', 'senha' => 'abcd')
);

/* print_r($usuarios_app); */

foreach($usuarios_app as $user){ //analisa de forma individual
  
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
    }
}

if($usuario_autenticado){
    echo 'Usuário autenticado.';
    
}else{
    header('Location: index.php?login=erro'); //força o redirecionamento
}

/* print_r($_POST);
echo '<br/>';

echo $_POST['email'];
echo '<br/>';
echo $_POST['senha']; //o get/post é um array
 */
//retorna a interpretação
?>