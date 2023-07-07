<?php

require_once("config.php");

//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);

// abaixo... Carrega 1 usuario
//$user = new Usuario();
//$user->loadById(3);
//echo $user;

//Carrega uma lista (varios) de usuarios

//$lista = Usuario::getList();
//echo json_encode($lista);


//Carrega uma lista de usuarios buscando pelo login

//$search = Usuario::search("sq");
//echo json_encode($search);

//Carrega um usuario usando o login e a senha
$usuario = new Usuario();
$usuario->login("user","12345");

echo $usuario;
?>

