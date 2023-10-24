<?php

//CRIAÇÃO DE ARQUIVOS

print_r($_POST);

//Estamos trabalhando na montagem do texto

$titulo = str_replace('#', '-',$_POST['titulo']);
$categoria = str_replace('#', '-',$_POST['categoria']);
$descricao = str_replace('#', '-',$_POST['descricao']); //modificando se caso o usuário colocar "#" para "-"

//implode('#', $_POST)

$texto = $titulo . '#' .$categoria. '#' .$descricao . PHP_EOL; //PHP_EOL: armazena o caracter de quebra de linha

//abrindo arquivo
$arquivo = fopen('arquivo.txt','a'); //abre um novo arquivo, a = abre apenas para escrita

//editando arquivo
fwrite($arquivo, $texto); //qual arquivo e o que eu quero escrever

//fechando arquivo
fclose($arquivo); //fecha arquivo

//echo $texto;

header('Location: abrir_chamado.php');

?>