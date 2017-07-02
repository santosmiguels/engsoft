<?php
$eNome = $_POST['Nome'];
$eResponsavel = $_POST['NomeR'];
$eCNPJ = $_POST['CNPJ'];
$eEmail = $_POST['Email'];
$eTelefone = $_POST['Tel'];
$eEndereco = $_POST['End'];
$ePontoRef = $_POST['Login']; //MUDAR!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
$eSenha = $_POST['Senha'];
$strcon = mysqli_connect('localhost','root','','unbsnacks') or die('Erro ao conectar ao banco de dados 2');
$sql = "INSERT INTO empresas(eNome, eResponsavel, eCNPJ, eEmail, eTelefone, eEndereco, ePontoRef, eSenha) VALUES ";
$sql .= "('$eNome', '$eResponsavel', '$eCNPJ', '$eEmail', '$eTelefone', '$eEndereco', '$ePontoRef', '$eSenha')"; 

if($eNome == "" || $eNome == null || $eResponsavel == "" || $eResponsavel == null || $eCNPJ == "" || $eCNPJ == null || $eEmail == "" || $eEmail == null || $eTelefone == "" || $eTelefone == null || $eEndereco == "" || $eEndereco == null || $ePontoRef == "" || $ePontoRef == null || $eSenha == "" || $eSenha == null){
	echo"<script language='javascript' type='text/javascript'>alert('Todos os campos devem ser preenchidos');window.location.href='index.html';</script>";
}else{



mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro da empresa");
mysqli_close($strcon);
echo "Empresa cadastrada com sucesso!";

}
?>