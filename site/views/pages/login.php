<?php include('../layout/header_nav.php'); ?>
<h1 class="text-center">login</h1>
<div class="border_log text-center">

	<div class="rounded-circle">
		<img class="avatar_login img-fluid text-center " src="https://quiz-digital-incollables.playbac.fr/uploads/media/avatar/0001/01/thumb_79_avatar_small.png" alt="logo login">
	</div>
	<div class="log_input text-center">
		<form class="form_log">
			<label for="mail"></label>
			<input type="email" name="mail" id="mail" required placeholder="your email address">
			<br>
			<label for="password"></label>
			<input type="password" name="password" id="password" required placeholder="password">
			<a href="#"><p>not register ?! sign in here !</p></a>
			<input class="btn btn-info" type="submit" value="Submit">
		</form>
	</div>
</div>

<?php include('../layout/footer.php'); ?>