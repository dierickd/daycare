<?php
try {
	$pdo = new PDO('mysql:host=localhost;dbname=daycare;charset=utf8', 'root', '');	
} catch (PDOException $e) {
	die('Impossible de se connecter à la base de donnée');
}

$req = $pdo->query('SELECT * FROM chat');
$message = $req->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/css/app.css">
	<title>Take care of him</title>
</head>

<body>
	
	<div class="container">
	<?php include('template/header.php'); ?>

	<article class="main_article">
		<?php foreach ($message as $m) { ?>
		
		<div class="jumbotron">
			<p><?= $m['message'] ?> </p>
		</div>

		<?php } ?>
		<p></p>
	</article>

	<?php include('template/footer.php'); ?>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
