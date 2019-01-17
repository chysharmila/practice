<?php include('header.php') ?>
<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<form action="registrationcontrol.php" method="POST">
				<div class="form-group">
					<h3><a href="#">Company information</a></h3>
				</div>
				<div class="form-group">

					<label>Name</label>
					<input type="text" name="name" placeholder="Enter your name"class="form-control">
					</div>
				<div class="form-group">
					<label>Address</label>
					<input type="text" name="address" placeholder="Enter your address"class="form-control">
					</div>
				<div class="form-group">
					<label>Email</label>
					<input type="Email" name="Email" placeholder="Email@gmail.com"class="form-control">
					</div>
				<div class="form-group">
					<label>contact</label>
					<input type="text" name="contact" placeholder="Contact"class="form-control">
					</div>
				<div class="form-group">
					<label>Message</label>
					<input type="text" name="message" placeholder="message" class="form-control">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" placeholder="Enter password">
				</div>
				<div class="form-group">
					<label>Confirm Password</label>
					<input type="password" name="confirmpassword" placeholder="Re-type password">
				</div>
				<div class="form-group">
	
					<input type="submit" name="submit" value="Register" class="btn btn-primary">
				</div>
			</form>
		</div>
	</div>
</div>
<?php include('footer.php') ?>
