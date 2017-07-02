<?php 

include 'auth.php';

$connect = mysqli_connect('localhost','root','','unbsnacks') or die('Erro ao conectar ao banco de dados 1');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['logIn'])) {
		$uUser = $_POST['User'];
		$uSenha = ($_POST['Pass']);

    	$search = "SELECT ePontoRef FROM empresas WHERE ePontoRef = '$uUser'";
    	$search1 = "SELECT cUsuario FROM clientes WHERE cUsuario = '$uUser'";
    	$search2 = "SELECT * FROM empresas WHERE ePontoRef = '$uUser' AND eSenha = '$uSenha'"; // MUDAR!!!!!!!!!!!!!!ePontoRef!!!
    	$search3 = "SELECT * FROM clientes WHERE cUsuario = '$uUser' AND cSenha = '$uSenha'";

    	$search4 = "SELECT cNome, cEmail, cTelefone, cCPF, cNascimento, cFoto FROM clientes WHERE cUsuario = '$uUser'";

    	if($uUser == "" || $uUser == null || $uSenha == "" || $uSenha == null){
    		echo"<script language='javascript' type='text/javascript'>
	    		alert('Todos os campos devem ser preenchidos');
	    		window.location.href='index.html';
    		</script>";
    		die();
    	}else{
      		$verifica = mysqli_query($connect,$search) or die(mysqli_error($connect));
      		$verifica1 = mysqli_query($connect,$search1) or die(mysqli_error($connect));
      		if (mysqli_num_rows($verifica)>1 || mysqli_num_rows($verifica1)>1) {
      			echo"<script language='javascript' type='text/javascript'>
	      			alert('Usuário não existe!');
	      			window.location.href='index.html';
      			</script>";
        		die();
      		} else {
      			$verifica = mysqli_query($connect,$search2) or die(mysqli_error($connect));
        		$verifica1 = mysqli_query($connect,$search3) or die(mysqli_error($connect));
    		}
    	}

        if (mysqli_num_rows($verifica)<=0 && mysqli_num_rows($verifica1)<=0){
          echo"<script language='javascript' type='text/javascript'>
	          alert('Login e/ou senha incorretos');
	          window.location.href='index.html';
          </script>";
          die();
        }else{
        	setcookie("login",$uUser);

			session_start();
			$_SESSION['logg'] = 1;
			$_SESSION['userid'] = $uUser;

			$verifica = mysqli_query($connect,$search4) or die(mysqli_error($connect));
			$row = mysqli_fetch_row($verifica);

			$nome = $row[0];
			$mail = $row[1];
			$tel = $row[2];
			$cpf = $row[3];
			$data = $row[4];
			$foto = $row[5];

			$_SESSION['name'] = $nome;
			$_SESSION['email'] = $mail;
			$_SESSION['nbr'] = $tel;
			$_SESSION['code'] = $cpf;
			$_SESSION['datanasc'] = $data;
			$_SESSION['img'] = $foto;

			if (isset($_SESSION['logg'])) {
	        	header("Location:panel.html");
	        	mysqli_close($connect);
	        	echo "Logado com sucesso!" , $nome, $data;
			} else {
				echo "Não está logado!";
			}
        }
    } else if (isset($_POST['regUser'])) {
		$cNome = $_POST['Nome'];
		$cEmail = $_POST['Email'];
		$cTelefone = $_POST['Tel'];
		$cCPF = $_POST['CPF'];
		$cNascimento = $_POST['Nasc'];
		$cUsuario = $_POST['Login'];
		$cSenha = $_POST['Senha'];
		$cFoto = $_POST['Foto'];

		if($cNome == "" || $cNome == null || $cEmail == "" || $cEmail == null || $cTelefone == "" || $cTelefone == null || $cCPF == "" || $cCPF == null || $cNascimento == "" || $cNascimento == null || $cUsuario == "" || $cUsuario == null || $cSenha == "" || $cSenha == null){
			echo"<script language='javascript' type='text/javascript'>
					alert('Todos os campos devem ser preenchidos');
					window.location.href='index.html';
				</script>";
		} else {
			if (validaNbr($cTelefone)) {
				if(validaCPF($cCPF)) {
					$sql = "INSERT INTO clientes(cNome, cEmail, cTelefone, cCPF, cNascimento, cUsuario, cSenha, cFoto) VALUES ";
					$sql .= "('$cNome', '$cEmail', '$cTelefone', '$cCPF', '$cNascimento', '$cUsuario', '$cSenha', '$cFoto')";

					mysqli_query($connect,$sql) or die("Erro ao tentar cadastrar registro do usuario");
					mysqli_close($connect);
					echo"<script language='javascript' type='text/javascript'>
							alert('Cliente cadastrado com sucesso!');
							window.location.href='index.html';
					</script>";
				} else {
					echo"<script language='javascript' type='text/javascript'>
							alert('CPF inválido!');
							window.location.href='index.html';
					</script>";
				}
			} else {
				echo"<script language='javascript' type='text/javascript'>
						alert('Telefone inválido! \\n OBS: Informe apenas números.');
						window.location.href='index.html';
				</script>";
			}
		}
    } else if (isset($_POST['regComp'])) {
		$eNome = $_POST['Nome'];
		$eResponsavel = $_POST['NomeR'];
		$eCNPJ = $_POST['CNPJ'];
		$eEmail = $_POST['Email'];
		$eTelefone = $_POST['Tel'];
		$eEndereco = $_POST['End'];
		$ePontoRef = $_POST['Login']; //MUDAR!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
		$eSenha = $_POST['Senha'];
		$eFoto = $_POST['Foto'];

		if($eNome == "" || $eNome == null || $eResponsavel == "" || $eResponsavel == null || $eCNPJ == "" || $eCNPJ == null || $eEmail == "" || $eEmail == null || $eTelefone == "" || $eTelefone == null || $eEndereco == "" || $eEndereco == null || $ePontoRef == "" || $ePontoRef == null || $eSenha == "" || $eSenha == null){
			echo"<script language='javascript' type='text/javascript'>
					alert('Todos os campos devem ser preenchidos');
					window.location.href='index.html';
				</script>";
		} else {
			if (validaNbr($eTelefone)) {
				if (validar_cnpj($eCNPJ)) {
					$sql = "INSERT INTO empresas(eNome, eResponsavel, eCNPJ, eEmail, eTelefone, eEndereco, ePontoRef, eSenha, eFoto) VALUES ";
					$sql .= "('$eNome', '$eResponsavel', '$eCNPJ', '$eEmail', '$eTelefone', '$eEndereco', '$ePontoRef', '$eSenha', '$eFoto')"; 

					mysqli_query($connect,$sql) or die("Erro ao tentar cadastrar registro da empresa");
					mysqli_close($connect);
					echo"<script language='javascript' type='text/javascript'>
							alert('Empresa cadastrada com sucesso!');
							window.location.href='index.html';
					</script>";
				} else {
					echo"<script language='javascript' type='text/javascript'>
							alert('CNPJ inválido!');
							window.location.href='index.html';
					</script>";
				}
			} else {
				echo"<script language='javascript' type='text/javascript'>
						alert('Telefone inválido! \\n OBS: Informe apenas números.');
						window.location.href='index.html';
				</script>";
			}
		}
    } else if (isset($_POST['logOut'])) {
    	session_start();
		$_SESSION['logg'] = 0;
		header("Location:index.html");
    }
}
?>