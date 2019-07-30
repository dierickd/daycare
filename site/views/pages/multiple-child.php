<?php include('../layout/header_nav.php'); ?>
<div class="site-content">
	<h1 class="text-center">Your childrens holliday !</h1>
	<form action="#" method="post">
		<div class="btn_submit_add_child">
			<input type="submit" value="Validate registration">
		</div>
		<table class="table_add_child">
			<thead>
				<tr>
					<th>#</th>
					<th scope="col">Firstname</th>
					<th scope="col">Sex</th>
					<th scope="col">Date of birth</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Child 1</td>
					<td class="label"><label for="firstname">Full name</label></td>
					<td>
						<input type="text" name="firstname" class="item-input" id="firstname" placeholder="do john">
					</td>
					<td class="label"><label for="sex">Sex</label></td>
					<td>
						<select class="item-input" id="sex">
							<option selected>choose</option>
							<option name="boy">boy</option>
							<option name="girl">girl</option>
						</select>
					</td>
					<td class="label"><label for="birth">Birth</label></td>
					<td>
						<input class="item-input" type="date" name="birth" id="birth">
					</td>
				</tr>
				<tr>
					<td>Child 2</td>
					<td class="label"><label for="firstname">Full name</label></td>
					<td>
						<input type="text" name="firstname" class="item-input" id="firstname" placeholder="do john">
					</td>
					<td class="label"><label for="sex">Sex</label></td>
					<td>
						<select class="item-input" id="sex">
							<option selected>choose</option>
							<option name="boy">boy</option>
							<option name="girl">girl</option>
						</select>
					</td>
					<td class="label"><label for="birth">Birth</label></td>
					<td>
						<input class="item-input" type="date" name="birth" id="birth">
					</td>
				</tr>
				<tr>
					<td>Child 3</td>
					<td class="label"><label for="firstname">Full name</label></td>
					<td>
						<input type="text" name="firstname" class="item-input" id="firstname" placeholder="do john">
					</td>
					<td class="label"><label for="sex">Sex</label></td>
					<td>
						<select class="item-input" id="sex">
							<option selected>choose</option>
							<option name="boy">boy</option>
							<option name="girl">girl</option>
						</select>
					</td>
					<td class="label"><label for="birth">Birth</label></td>
					<td>
						<input class="item-input" type="date" name="birth" id="birth">
					</td>
				</tr>
				<tr class="btn_add_child">
					<td colspan="4">
						<a href="#" title="add child"><img  class="logo_add_child" src="https://cdn.pixabay.com/photo/2017/08/16/00/29/add-person-2646097_960_720.png" alt="Logo add child"></a>
					</td>
				</tr>
			</tbody>
		</table>
	</form>

	<div class="price">
		<div class="main_price">
			<a href="#"><img src="https://icongr.am/fontawesome/shopping-cart.svg?color=fefefe" alt="logo add command"></a>
			<div class="content_price">
				<h4 class="contact_subtitle_form">pension price</h4>
				<p class="tarif"> 99 $ / per day</p>
			</div>
		</div>
	</div>

	<div class="reduction"><h2 class="text-center">
		Reduction
	</h2>
	<div class="reduction-content text-center">
		<p>
			For each child registered, 10 % discount is offered to you and increases by 10% per year of vacation
		</p>
	</div>
	</div>

</div>

<?php include('../layout/footer.php'); ?>
