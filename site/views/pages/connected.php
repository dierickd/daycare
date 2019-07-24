<?php include('../layout/header_nav.php'); ?>
<h1 class="text-center">Your Account</h1>
<div class="container_connected">
	<div class="border_seeting_picture_child">
		<div class="border_seeting_connected">
			<h2 class="text-center">Settings</h2>
			<form class="form_seeting_connected">
				<div class="username_connected">
					<label id="username"></label>
					<input type="text" name="username_connected" id="username" placeholder="username" class="username_connected_input">
					<a href="#"><img class="logo_pen_seeting_connected" src="https://image.flaticon.com/icons/png/512/22/22725.png" alt="logo  pen"></a>
					<input class="btn btn-outline-info save_seetings_connected" type="submit" value="save change">
				</div>
				<div class="password_connected">
					<label for="password"></label>
					<input type="password" name="password_connected" id="password" placeholder="password" class="password_connected_input">
					<a href="#"><img class="logo_pen_seeting_connected" src="https://image.flaticon.com/icons/png/512/22/22725.png" alt="logo  pen"></a>
					<input class="btn btn-outline-info save_seetings_connected" type="submit" value="save change">
				</div>
				<div class="email_connected">
					<label for="mail"></label>
					<input type="email" name="email_connected" id="mail" class="email_connected_input" placeholder="email">
					<a href="#"><img class="logo_pen_seeting_connected" src="https://image.flaticon.com/icons/png/512/22/22725.png" alt="logo  pen"></a>
					<input class="btn btn-outline-info save_seetings_connected" type="submit" value="save change">
				</div>
				<div class="delete_connected">
					<input class="btn btn-danger delete_btn_connected" type="submit" value="Delete your account">
				</div>
			</form>
		</div>
		<div class="border_child_picture_connected">
			<h3 class="text-center">Your child Picture</h3>
			<div class="img_child_connected">
				<label class="img_upload_result text-center" for="input">upload an image for your area</label>
			</div>
			<div class="upload_img_child_connected">
				<input type="file" name="input">
				<input class="btn btn-outline-primary save_picture_connected" type="submit" value="save picture">
			</div>
		</div>
	</div>
</div>
<div class="border_your_children">
	<div class="form_children_connected">
		<form action="traitement.php" method="POST">
			<div class="table-responsive-sm table_form_children_connected">
				<table class="table table-striped table-dark  text-center table_connected">
					<thead>
						<tr>
							<th>
								firstname
							</th>
							<th>
								Sex
							</th>
							<th>
								date of birth
							</th>
							<th class="modify_form_table_child_connected">
								<img class="logo_pen_connected" src="https://image.flaticon.com/icons/png/512/22/22725.png" alt="logo  pen">
							</th>
							<th>
								<input class="btn btn-warning disabled " type="submit" value="Submit">
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<label for="firstname"></label>
								<input type="text" name="firstname_connected_one" id="firstname" class="form-control firstname_connected" placeholder="Max-Rager">
							</td>
							<td>
								<label for="sex"></label>
								<select class="form-control sex_connected" id="sex" name="sex_connected_one">
									<option selected>choose</option>
									<option>boy</option>
									<option>girl</option>
								</select>
							</td>
							<td>
								<label for="birth"></label>
								<input type="date" name="birth_connected_one" class="form-control birth_connected" id="birth">
							</td>
							<td>
								<img class="logo_pen_connected" src="https://image.flaticon.com/icons/png/512/22/22725.png" alt="logo  pen">
							</td>
							<td>
								<input class="btn btn-warning submit_row_table_connected" type="submit" value="Submit">
							</td>
						</tr>
						<tr>
							<td>
								<label for="firstname"></label>
								<input type="text" name="firstname_connected_one" id="firstname" class="form-control firstname_connected" placeholder="Peyton">
							</td>
							<td>
								<label for="sex"></label>
								<select class="form-control sex_connected" id="sex" name="sex_connected_one">
									<option selected>choose</option>
									<option>boy</option>
									<option>girl</option>
								</select>
							</td>
							<td>
								<label for="birth"></label>
								<input type="date" name="birth_connected_one" class="form-control birth_connected" id="birth">
							</td>
							<td>
								<img class="logo_pen_connected" src="https://image.flaticon.com/icons/png/512/22/22725.png" alt="logo  pen">
							</td>
							<td>
								<input class="btn btn-warning submit_row_table_connected" type="submit" value="Submit">
							</td>
						</tr>
						<tr>
							<td>
								<label for="firstname"></label>
								<input type="text" name="firstname_connected_one" id="firstname" class="form-control firstname_connected" placeholder="Ruby">
							</td>
							<td>
								<label for="sex"></label>
								<select class="form-control sex_connected" id="sex" name="sex_connected_one">
									<option selected>choose</option>
									<option>boy</option>
									<option>girl</option>
								</select>
							</td>
							<td>
								<label for="birth"></label>
								<input type="date" name="birth_connected_one" class="form-control birth_connected" id="birth">
							</td>
							<td>
								<img class="logo_pen_connected" src="https://image.flaticon.com/icons/png/512/22/22725.png" alt="logo  pen">
							</td>
							<td>
								<input class="btn btn-warning submit_row_table_connected" type="submit" value="Submit">
							</td>
						</tr>
						<tr>
							<td>
								<label for="firstname"></label>
								<input type="text" name="firstname_connected_one" id="firstname" class="form-control firstname_connected" placeholder="Ambre">
							</td>
							<td>
								<label for="sex"></label>
								<select class="form-control sex_connected" id="sex" name="sex_connected_one">
									<option selected>choose</option>
									<option>boy</option>
									<option>girl</option>
								</select>
							</td>
							<td>
								<label for="birth"></label>
								<input type="date" name="birth_connected_one" class="form-control birth_connected" id="birth">
							</td>
							<td>
								<img class="logo_pen_connected" src="https://image.flaticon.com/icons/png/512/22/22725.png" alt="logo  pen">
							</td>
							<td>
								<input class="btn btn-warning submit_row_table_connected" type="submit" value="Submit">
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</form>
	</div>
</div>
<div class="information_connected">
	<p class="text-center">
		For more children contact us to +03360606060606, we will create you area user !
	</p>
</div>
</div>
<?php include('../layout/footer.php'); ?>
