

<?php

$idtutorial= $_GET['id'];

include 'banco.php';

$stmt = $pdo->prepare('DELETE FROM TUTORIAL WHERE id= ?');
$stmt->execute([$idtutorial]);


header('location: home.php');


?>