
<?php include('../layout/header_nav.php'); ?>

<h1 class="contact_h1">Make your reservation Now !</h1>
<div class="form_container">
	<form action="" method="POST" class="contact_form">
		<div class="main_flex">
			<fieldset class="field_child">
				<legend class="legend">Your child</legend>
				<div class="items_child">
					<label for="validationServer01" class="form_title">First name</label>
					<input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="Mark" required>
					<div class="valid-feedback">
						Looks good!
					</div>
				</div>
				<div class="items_child">
					<label for="validationServer02" class="form_title">Last name</label>
					<input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name" value="Otto" required>
					<div class="valid-feedback">
						Looks good!
					</div>
				</div>
				<div class="items_child">
					<label class="form_title">Boy or girl ?</label>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<label class="input-group-text" for="inputGroupSelect01">Select</label>
						</div>
						<select class="custom-select" id="inputGroupSelect01">
							<option selected>choose</option>
							<option value="boy">boy</option>
							<option value="girl">girl</option>
						</select>
					</div>
				</div>
				<div class="items_child moreChild">
					<a href="multiple-child.php" >more one child here !</a>
				</div>
			</fieldset>

			<fieldset class="field_option">
				<legend class="legend">Reservation</legend>
				<div class="main_option">
					<div class="content_flex">
						<div class="form_reservation_date">
							<div class="content_resa">
								<label for="arrival" class="contact_label">Arrival</label>
								<input class="input_arrival" type="date" name="arrival" id="arrival">
							</div>
							<div class="content_resa">
								<label for="departure" class="contact_label">departure</label>
								<input class="input_departure" type="date" name="departure" id="departure">
							</div>
						</div>
						<div class="pension_plan">
							<div class="form-check">
								<input class="form-check-input-half_pension" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
								<label class="form-check-label-half-pension" for="exampleRadios1">
									Half pension
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input-complete-pension" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
								<label class="form-check-label-complete-pension" for="exampleRadios2">
									complete pension
								</label>
							</div>
						</div>
					</div>
					<div class="price">
						<div class="main_price">
							<a href="#"><img src="https://icongr.am/fontawesome/shopping-cart.svg?color=fefefe" alt="logo add command"></a>
							<div class="content_price">
								<h4 class="contact_subtitle_form">pension price</h4>
								<p class="tarif"> 99 $ / per day</p>
							</div>
						</div>
					</div>
				</div>
			</fieldset>
		</div>

		<div class="text_area">
			<label for="user_text"></label>
			<textarea id="user_text" placeholder="your messag here !" cols="60" rows="10"></textarea>
		</div>
		
		<div class="contact_footer">
			<div class="contact_footer_btn">
				<button class="btn" type="submit"><span>Soumettre &#x2714;</span></button>
			</div>
		</div>
		
		
	</form>
</div>


<?php include('../layout/footer.php'); ?>