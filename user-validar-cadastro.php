<?php
	session_start();

	// echo"GET";
	// var_dump($_GET);
	// print("POST");
	// var_dump($_POST);

	include 'banco.php';
	$pdo = dbConnect();

	$name 		= $_POST['name'];
	$lastname 	= $_POST['lastname'];
	$email 		= $_POST['email'];
	$password 	= $_POST['password'];
	$confirm_password = $_POST['confirm_password'];

	$inputString = '<h1 style="padding: 10px; background-color: #a0ffa8; text-decoration: none; color: #333">
					Cadastro realizado com sucesso! <a href="login.php">Clique aqui para o realizar login</a></h1>';

	//----- VERIFICAÇÕES E MENSAGENS DE ERRO
	//Verificaçao no banco se o email já existe
	$stmt = $pdo-> prepare("
		SELECT * FROM user
		WHERE email = '$email'
	");
	$stmt->execute([$email]);
	//Error email já existente
	if ($stmt->fetch() !== false) {
		echo "E-mail já cadastrado!";
		header('user-cadastro.php');
		exit();
	}//Error senha menor que 8 dígitos
	elseif ($password != $confirm_password ) {
		echo "Suas senhas não conferem";
		header('user-cadastro.php');
		exit();
	}//Error senhas n conferem
	elseif (strlen($password) && strlen($confirm_password) <= 7) {
		echo "Sua senha precisa possuir entre 8 e 15 caracteres e conter uma letra maiúscula, um símbolo e um número";
		header('user-cadastro.php');
		exit();
	}
	//----- END VERIFICAÇÕES E MENSAGENS DE ERRO

	//Inserindo dados no banco, criando conta
	$stmt = $pdo-> prepare("
		INSERT INTO user (name, lastname, email, password)
		VALUES (?, ?, ?, ?)
		");
	$stmt->execute([$name, $lastname, $email, $password]);

	echo $inputString;
	header('user-cadastro.php');

?>
