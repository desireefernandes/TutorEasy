<?php
	function dbConnect (){
	//Lembrem-se de trocar por seus próprios dados
		try {
			$dsn = 'mysql:dbname=tutorEasy';
	
			$pdo = new PDO($dsn, 'user0', 'Senha@123');
			return $pdo;

		} catch (PDOException $e){
			echo 'Erro ao conectar com o MySql: ' . $e->getMessage();
		}
	}

?>
