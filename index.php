<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="stylelogin.css" media="screen" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body>
		<div class="global">
			<form name="" method="post" action="">
				<label>Usuário <input type="text" name="user" /></label><br /><br />
				<label>Senha <input type="password" name="pass" /></label><br /><br />
				<input type="submit" name="submit" value="Logar" />
</div>
	<?php
				$user = @$_REQUEST['user'];
				$pass = @$_REQUEST['pass'];
				$submit = @$_REQUEST['submit'];

                /* Seu Nome e Senha */
				$user1 = 'Test';
				$pass1 = 'test';

				$user2 = 'Admin';
				$pass2 = 'admin';

				if($submit){
					if($user == "" || $pass == ""){
						echo "<script:alert('Por favor, preencha todos os campos!');</script>";
					}
					else{
						if(($user == $user1 && $pass == $pass1) || ($user == $user2 && $pass == $pass2)){
							session_start();
							$_SESSION['usuario']=$user;
							$_SESSION['senha']=$pass;
							header("Location: painel.html");
						}
						else{
							echo "<script>alert('Usuário e/ou senha inválido(s), Tente novamente!');</script>";
						}
					}
				}
			?>

</body>
</html>
