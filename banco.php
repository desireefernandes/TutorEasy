<?php
	function dbConnect (){
	//Lembrem-se de trocar por seus próprios dados
		try {
			$dsn = 'mysql:dbname=tutoreasy';
	
			$pdo = new PDO($dsn, 'ggal', 'g123');
			return $pdo;

		} catch (PDOException $e){
			echo 'Erro ao conectar com o MySql: ' . $e->getMessage();
		}
	}

?>
