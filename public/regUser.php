<?php
$cNome = $_POST['Nome'];
$cEmail = $_POST['Email'];
$cTelefone = $_POST['Tel'];
$cCPF = $_POST['CPF'];
$cNascimento = $_POST['Nasc'];
$cUsuario = $_POST['Login'];
$cSenha = $_POST['Senha'];
$strcon = mysqli_connect('localhost','root','','unbsnacks') or die('Erro ao conectar ao banco de dados 3');
$sql = "INSERT INTO clientes(cNome, cEmail, cTelefone, cCPF, cNascimento, cUsuario, cSenha) VALUES ";
$sql .= "('$cNome', '$cEmail', '$cTelefone', '$cCPF', '$cNascimento', '$cUsuario', '$cSenha')";

if($cNome == "" || $cNome == null || $cEmail == "" || $cEmail == null || $cTelefone == "" || $cTelefone == null || $cCPF == "" || $cCPF == null || $cNascimento == "" || $cNascimento == null || $cUsuario == "" || $cUsuario == null || $cSenha == "" || $cSenha == null){
	echo"<script language='javascript' type='text/javascript'>alert('Todos os campos devem ser preenchidos');window.location.href='index.html';</script>";
}else{

mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro do usuario");
mysqli_close($strcon);
echo "Cliente cadastrado com sucesso!";

}
?>