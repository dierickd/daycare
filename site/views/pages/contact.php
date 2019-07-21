
<?php include('../layout/header_nav.php'); ?>

<h1 class="contact_h1">Make your reservation Now !</h1>
<div class="form_container">
	<form class="form_contact text-center">
		<div class="form-col">
			<div class="col-md-4 mb-3">
				<h2 class="contact_subtitle_form">Your Child</h2>
				<label for="validationServer01" class="form_title">First name child</label>
				<input type="text" class="form-control is-valid text-center" id="validationServer01" placeholder="First name" value="Mark" required>
				<div class="valid-feedback">
					Looks good!
				</div>
			</div>
			<div class="col-md-4 mb-3">
				<label for="validationServer02" class="form_title">Last name child</label>
				<input type="text" class="form-control is-valid text-center" id="validationServer02" placeholder="Last name" value="Otto" required>
				<div class="valid-feedback">
					Looks good!
				</div>
			</div>
			<div class="col-md-4 mb-3">
				<label class="form_title">Boy or girl ?</label>
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<label class="input-group-text" for="inputGroupSelect01">Select</label>
					</div>
					<select class="custom-select" id="inputGroupSelect01">
						<option class="contact_option" selected>here</option>
						<option value="1">boy</option>
						<option value="2">girl</option>
						<option value="3">Dog ? really dog ???!!</option>
					</select>
				</div>
				<div class="moreChild">
					<a href="#" >more one child here !</a>
				</div>
			</div>
		</div>
	</form>
	<div class="border_three-part">
		<div class="form_reservation_date">
			<form>
				<h2 class="contact_subtitle_form">Reservation date</h2>
				<label for="arrival" class="contact_label">Arrival</label>
				<input class="input_arrival" type="date" name="arrival" id="arrival">
				<img src="https://cdn.pixabay.com/photo/2019/02/26/09/19/calender-4021509_960_720.png" alt="icon calendar" class="icon_calendar">
				<br/>
				<label for="departure" class="contact_label">departure</label>
				<input class="input_departure" type="date" name="departure" id="departure">
				<img src="https://cdn.pixabay.com/photo/2019/02/26/09/19/calender-4021509_960_720.png" alt="icon calendar" class="icon_calendar">
			</form>
		</div>
		<div class="pension_plan">
			<form>
				<h2 class="contact_subtitle_form">Pension plan</h2>
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
			</form>
		</div>
		<div class="pension_price text-center">
			<h2 class="contact_subtitle_form">pension price</h2>
			<p class="tarif"> 99 $ / per day</p>
			<br/>
			<a href="#"><img src="https://image.flaticon.com/icons/png/512/57/57563.png" alt="logo add command"></a>
		</div>
	</div>
</form>
</div>
<div class="text_area">
	<label for="user_text"></label>
	<textarea id="user_text" placeholder="your messag here !" cols="60" rows="10"></textarea>
</div>
<div class="contact_footer">
	<div class="img-fluid">
		<img src="../../public/img/contactfooter.jpg">
	</div>
	<div class="contact_footer_btn">
		<button class="btn btn-sucess bg-success" type="submit"><span><!--&#8730;-->&#x2714;</span></button>
	</div>
</div>

<?php include('../layout/footer.php'); ?>