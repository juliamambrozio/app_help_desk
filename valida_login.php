<?php

session_start();

//var que identifica se a autenticação foi aceita

$usuario_autenticado = false;
$usuario_id = null;
$usuario_perfil_id = null;

$perfis = array(1 => 'Administrativo', 2 => 'Usuario');

//usuários do sistema

$usuarios_app = array(
    array('id' => 1,'email' => 'adm@teste.com.br', 'senha' => '123456', 'perfil_id' => 1),
    array('id' => 2,'email' => 'user@teste.com.br', 'senha' => '123','perfil_id' => 1),
    array('id' => 3,'email' => 'jose@teste.com.br', 'senha' => '123','perfil_id' => 2),
    array('id' => 4,'email' => 'maria@teste.com.br', 'senha' => '123', 'perfil_id' => 2)
);

/* print_r($usuarios_app); */

foreach($usuarios_app as $user){ //analisa de forma individual
  
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
        $usuario_id = $user['id']; //se o login for válido, irá ser atribuído o valor do id na var
        $usuario_perfil_id = $user['perfil_id'];
    }
}

if($usuario_autenticado){
    echo 'Usuário autenticado.';
    $_SESSION['autenticado'] = 'Sim';
    $_SESSION['id'] = $usuario_id; //colocando id na session
    $_SESSION['perfil_id'] = $usuario_perfil_id; //armazenando o id do perfil
    header('Location: home.php');
    
}else{
    header('Location: index.php?login=erro'); //força o redirecionamento
    $_SESSION['autenticado'] = 'Não';
}

/* print_r($_POST);
echo '<br/>';

echo $_POST['email'];
echo '<br/>';
echo $_POST['senha']; //o get/post é um array
 */
//retorna a interpretação
?>