<?php

include 'banco.php';
$pdo = dbConnect(); 

$id = $_GET['id'];
var_dump($id);

try{
	$smt = $pdo->prepare("DELETE FROM user WHERE id =?");
	$smt->bindParam(1,$id);
	$del=$smt->execute();
	session_destroy();

} catch (Exception $th){

	echo $th;
}

header('location: user-cadastro.php');

?>
