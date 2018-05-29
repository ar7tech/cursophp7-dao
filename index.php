<?php 

require_once("config.php");

/* $sql = New Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios); */
//Carrega um usuário.
//$root = new Usuario();
//$root->loadbyid(3);
//echo $root;

//Carrega uma lista de usuários.
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login.
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha.
//$usuario = new Usuario();
//$usuario->login("root", "!@#$");
//echo $usuario;

//Utilizando a classe "insert".
//$aluno = new Usuario();
//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@lun0");
//$aluno->insert();
//echo $aluno;

//Criando um novo usuário (Utilizando o método "__construct").
//$aluno = new Usuario("aluno", "@alun0");
//$aluno->insert();
//echo $aluno;

//Alterar um usuário.
//$usuario = new Usuario();
//$usuario->loadById(8);
//$usuario->update("professor", "!@#$%¨&*");
//echo $usuario;

$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();
echo $usuario;

 ?>