<?php include('../layout/header_nav.php'); ?>
<h1 class="text-center">Your childrens holliday !</h1>
<div class="container_two">
	<div class="table-responsive-sm">
		<table class="table table-striped table-dark text-center">
			<thead>
				<tr>
					<th scope="col">
						Firstname
					</th>
					<th scope="col">
						Sex
					</th>
					<th scope="col">
						Date of birth
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<label for="firstname"></label>
						<input type="text" name="firstname" class="form-control" id="firstname" placeholder="max">
					</td>
					<td>
						<label for="sex"></label>
						<select class="form-control" id="sex">
							<option selected>choose</option>
							<option>boy</option>
							<option>girl</option>
						</select>
					</td>
					<td  class="td_custom">
						<label for="birth"></label>
						<input class="input-group input-group-sm mb-3 custom_birth_input" type="date" name="birth" id="birth">
					</td>
				</tr>
				<tr>
					<label for="firstanme"></label>
					<td>
						<input type="text" name="firstname" class="form-control" id="firstname" placeholder="robert">
					</td>
					<label for="sex"></label>
					<td>
						<select class="form-control" id="sex">
							<option selected>choose</option>
							<option>boy</option>
							<option>girl</option>
						</select>
					</td>
					<td class="td_custom">
						<label for="birth"></label>
						<input class="input-group input-group-sm mb-3" type="date" name="birth" id="birth">
					</td>
				</tr>
				<tr>
					<label for="firstanme"></label>
					<td>
						<input type="text" name="firstname" class="form-control" id="firstname" placeholder="Denzel">
					</td>
					<label for="sex"></label>
					<td>
						<select class="form-control" id="sex">
							<option selected>choose</option>
							<option>boy</option>
							<option>girl</option>
						</select>
					</td>
					<td class="td_custom">
						<label for="birth"></label>
						<input class="input-group input-group-sm mb-3" type="date" name="birth" id="birth">
					</td>
				</tr>
				<tr>
					<label for="firstanme"></label>
					<td>
						<input type="text" name="firstname" class="form-control" id="firstname" placeholder="Elodie">
					</td>
					<label for="sex"></label>
					<td>
						<select class="form-control" id="sex">
							<option selected>choose</option>
							<option>boy</option>
							<option>girl</option>
						</select>
					</td>
					<td class="td_custom">
						<label for="birth"></label>
						<input class="input-group input-group-sm mb-3" type="date" name="birth" id="birth">
					</td>
				</tr>
				<tr>
					<td>
						<a href="#" title="add child"><img  class="logo_add_child" src="https://cdn.pixabay.com/photo/2017/08/16/00/29/add-person-2646097_960_720.png" alt="logo addition of child"></a>
					</td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="pension_price_multiple text-center">
		<h3>Pension price</h3>
		<p class="print_price_multiple">
			396 $ / per day
		</p>
		<br/>
		<a href="#"><img src="https://image.flaticon.com/icons/png/512/57/57563.png" alt="logo add command" class="logo_add_command_multiple"></a>
		<p class="pension_price_multiple_italic">
			please submit before adding your kart
		</p>
	</div>
</div>
</div>
<div class="btn_container">
<input class="btn btn-primary" type="submit" value="Submit">
</div>
<div class="reduction"><h2 class="text-center">
	 Réduction
</h2>
<div class="reduction-content text-center">
	<p>
		For each child registered, 10 % discount is offered to you and increases by 10% per year of vacation
	</p>
</div>
</div>
<?php include('../layout/footer.php'); ?>
