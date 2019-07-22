<?php include('../layout/header_nav.php'); ?>
<h1 class="text-center">login</h1>
<div class="border_log text-center">
	<div class="rounded-circle">
	<img class="avatar_login img-fluid text-center " src="https://quiz-digital-incollables.playbac.fr/uploads/media/avatar/0001/01/thumb_79_avatar_small.png" alt="logo login">
	</div>
	<br>
	<br>
	<div class="log_input text-center">
		<form>
			<label for="mail"></label>
			<input type="email" name="mail" id="mail" required placeholder="your email address">
			<br>
			<label for="password"></label>
			<input type="password" name="password" id="password" required placeholder="password">
		</form>
	</div>
	<div class="login_register">
		<a href="signIn.php"><p>not register ?! sign in here !</p></a>
	</div>
	<div class="btn_container_login">
		<input class="btn btn-info" type="submit" value="Submit">
	</div>
</div>

