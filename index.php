<!DOCTYPE html>
<html>
<head>
	<title>USER REGISTRATION FORM</title>
	<style type="text/css">
		* {
			box-sizing: border-box;
		}
		.container {
			width: 100%;
		}
		.container form, .form {
			/*text-align: center;*/
			width: 500px;
			margin: 100px auto;
			border: 1px solid #ffeeff;
			background: linear-gradient(to left, rgb(25,10,34),rgb(101,234,255));
			padding: 15px;
		}
		.form {
			width: 700px !important;
		}
		.title {
			margin: 5px auto;
			text-align: center;
			color: #ffffff;
		}
		.form .form-group {
			margin-top: 10px;
		}
		.container .form-group p, .form label{
			font-size: 18px;
			font-weight: 400;
		}
		.form label {
			color: #ffffff;
		}
		.form span {
			font-style: bold;
			font-weight: 700;
			color: #000;
		}
		.container .input-group {
			width: 40%;
			margin-right: 20px;
			display: inline-block;
		}
		.container select, input[type='date'] {
			width: 200px;
			font-size: 18px;
		}
		input[type='email'] {
			width: 70%;
		}
		.btn {
			display: block;
			width: 50%;
			padding: 5px;
			margin-top: 20px;
		}
		.btn-primary {
			background: linear-gradient(to top,rgb(101,234,255),rgb(0,45,121));
			color: #ffffff;
			border-radius: 50px;
			font-size: 18px;
			font-weight: 700;
		}
	</style>
</head>
<body>
	<!-- If Submit Button is clicked, show the user information -->
	<?php if(isset($_POST['btnReg'])): ?>
		<div class="container">
			<div class="form">
				<div class="title">
					<h2>Please Kindly Confirm your Informations:</h2>
				</div>
				<div class="form-group input-group">
					<label>
						<span>First Name:</span> <?= $_POST['fname']; ?>
					</label>
				</div>
				<div class="form-group input-group">
					<label>
						<span>Last Name:</span> <?= $_POST['lname']; ?>
					</label>
				</div>
				<div class="form-group input-group">
					<label>
						<span>Date of Birth:</span> <?= $_POST['dob']; ?>
					</label>
				</div>
				<div class="form-group input-group">
					<label>
						<span>Gender:</span> <?= $_POST['optSex']; ?>
					</label>
				</div>
				<div class="form-group">
					<label>
						<span>Email Address:</span> <?= $_POST['email']; ?>
					</label>
				</div>
				<div class="form-group input-group">
					<label>
						<span>Contact N0:</span> <?= $_POST['tel']; ?>
					</label>
				</div>
				<div class="form-group input-group">
					<label>
						<span>Marital Status:</span> <?= $_POST['optStatus']; ?>
					</label>
				</div>
				<div class="form-group">
					<label>
						<span>Address:</span> <?= $_POST['address']; ?>
					</label>
				</div>
				<div class="form-group">
					<label>
						<span>Country:</span> <?= $_POST['country']; ?>
					</label>
				</div>
				<div class="form-group input-group">
					<label>
						<span>State:</span> <?= $_POST['state']; ?>
					</label>
				</div>
				<div class="form-group input-group">
					<label>
						<span>City:</span> <?= $_POST['city']; ?>
					</label>
				</div>
			</div>
		</div>
		<!-- if Submit button is not clicked, show the following form -->
	<?php else: ?>
			<div class="container">

				<form action="" method="post">
					<div class="title">
						<h2>User Registration</h2>
					</div>
					<div class="form-group input-group">
						<p>First Name:</p>
						<input type="text" name="fname" placeholder="First Name" required>
					</div>
					<div class="form-group input-group">
						<p>Last Name:</p>
						<input type="text" name="lname" placeholder="Last Name" required>
					</div>
					<div class="form-group input-group">
						<p>Date of Birth:</p>
						<input type="date" name="dob" placeholder="MM/DD/YYYY">
					</div>
					<div class="form-group input-group">
						<p>Gender</p>
						<select name="optSex">
							<option selected>-Select-</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
					</div>
					<div class="form-group">
						<p>Email Address:</p>
					<input type="email" name="email" placeholder="info@example.com" required>
					</div>
					<div class="form-group input-group">
						<p>Contact N0:</p>
						<input type="text" name="tel" placeholder="Phone Number" required>
					</div>
					<div class="form-group input-group">
						<p>Marital Status:</p>
						<select name="optStatus">
							<option selected>-Select-</option>
							<option value="Single">Single</option>
							<option value="Married">Married</option>
							<option value="Divorced">Divorced</option>
						</select>
					</div>
					<div class="form-group">
						<p>Residential Address:</p>
						<textarea name="address" rows="5" cols="40" required=""></textarea>
					</div>
					<div class="form-group">
						<p>Country:</p>
						<input type="text" name="country" placeholder="Country" style="width: 70%;" required>
					</div>
					<div class="form-group input-group">
						<p>State of Origin:</p>
						<input type="text" name="state" placeholder="State of Origin" required>
					</div>
					<div class="form-group input-group">
						<p>Home Town/City:</p>
						<input type="text" name="city" placeholder="Home Town" required>
					</div>
					<div class="form-group">
						<button type="submit" name="btnReg" class="btn btn-primary">Register</button>
					</div>
				</form>
			</div>
	<?php endif; ?>

</body>
</html>