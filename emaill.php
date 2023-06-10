<?php
// Verifica se o campo 'email' foi enviado via método POST e se não está vazio
if(isset($_POST['email'])&& !empty($_POST['email'])){


//pegqando variaveis
$nome=addslashes($_POST['name']);
$email=addslashes($_POST['email']);
$message=addslashes($_POST['message']);

}







?>