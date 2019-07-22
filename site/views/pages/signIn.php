<?php include('../layout/header_nav.php'); ?>

<h1 class="text-center">Sign in</h1>
<div class="block">
<div class="signIn_container">
	<div class="bord_sign_in">
		<div class="avatar_signin">
			<img src="https://polysonnance.com/wp-content/uploads/2016/07/logo-BS.png" alt="logo presentation children">
		</div>
		<div class="form_signin">
			<form>
				<div class="email_signin text-center">
					<label for="mail"></label>
					<input type="email" name="mail sign" id="mail" placeholder="email address" required>
				</div>
				<div class="username_signin text-center">
					<label for="username"></label>
					<input type="text" name="username sign" id="username" placeholder="your username" required>
				</div>
				<div class="birth_signin text-center">
					<label for="birth"></label>
					<input type="date" name="birth sign" id="birth"  required="">
				</div>
				<div class="phone_signin">
					<label for="phone"></label>
					<input type="tel" name="phone" id="phone" placeholder="Enter your phone number" required>
				</div>
				<div class="child_number_signin">
					<label for="child"></label>
					<input type="text" name="child number" id="child" placeholder="how many child have you got ?" required>
				</div>
				<div class="submit_signin">
					<button class="btn btn-outline-success submit_signin" type="submit">Submit form</button>
				</div>
			</form>
		</div>
	</div>
</div>
</div>