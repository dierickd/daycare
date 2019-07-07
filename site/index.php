<?php
try {
	$pdo = new PDO('mysql:host=localhost;dbname=daycare;charset=utf8', 'root', '');	
} catch (PDOException $e) {
	die('Impossible de se connecter à la base de donnée');
}

$req = $pdo->query('SELECT * FROM chat');
$message = $req->fetchAll(PDO::FETCH_ASSOC);

header('Location: views/pages/home.php');

?>

