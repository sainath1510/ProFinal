<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="style1.css">
</head>

<body>
	<div class="forms">
		<ul class="tab-group">
			<li class="tab active"><a href="#login">Log In</a></li>
			<li class="tab"><a href="#signup">Sign Up</a></li>
		</ul>
		<form action="Send_Data.php" id="login" method="POST">
			<h1>Log In</h1>
			<div class="input-field">
				<label  class="lbl">Username</label>
				<input type="text" class="ip" name="Username" required placeholder="Enter your Username" autocomplete="off" >
				<label for="password" class="lbl">Password</label>
				<input type="password" class="ip" name="password" required autocomplete="off" placeholder="Enter your Password">
				
				<p class="text-p"> <a href="#">Forgot password?</a> </p>
				<input type="submit"  value="Login" class="btn btn-success" id="button" >
			</div>
		</form>
		<form action="register.php" id="signup" style="overflow: hidden" id="reg" method="POST">
			<h1>Sign Up</h1>
			<div class="input-field">
				<label for="Username" class="lbl">User Name</label>
				<input type="text" class="ip" name="Username" placeholder="Enter your Name" autocomplete="off">
				<label for="email" class="lbl">Email</label>
				<input type="email" class="ip" name="email" required="email" placeholder="Enter your Email" autocomplete="off" />
				<label for="password" class="lbl">Password</label>
				<input type="password" class="ip" name="password" required autocomplete="off" placeholder="Enter your Password" />
				<label for="mbn" class="lbl">Mobile No</label>
				<input type="tel" class="ip" name="mbn" placeholder="Enter your Mobile No." autocomplete="off">
				<label for="rollno" class="lbl">Roll No</label>
				<input type="text" class="ip" name="rollno" placeholder="Enter Roll Number" autocomplete="off">
				<label class="chooseyr">Choose Your Year</label>

				<input type="radio" name="year" value="I" id="I" >
				<label for="I" class="yr">I</label>

				<input type="radio" name="year" value="II" id="II" >
				<label for="II" class="yr">II</label>

				<input type="radio" name="year" value="III" id="III" >
				<label for="III" class="yr">III</label>

				<input type="radio" name="year" value="IV" id="IV" >
				<label for="IV" class="yr">IV</label><br>
				<label for="branch" class="brn">Select Your Branch</label>
				<select name="branch" class="sel">
					<option value="" disabled selected>Select your Branch</option>
					<option value="Cse">Cse</option>
					<option value="Ece">Ece</option>
					<option value="It">It</option>
					<option value="Mech">Mech</option>
					<option value="Eee">Eee</option>
					<option value="CIVIL">Civil</option>
				</select>
				<label >
					<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
				</label>
			</div>
			<p class="alert">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
			<div>
				<input type="submit"  value="Sign up" class="btn btn-success" id="button"/>
			</div>
		</form>
	</div>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('.tab a').on('click', function (e) {
				e.preventDefault();
				$(this).parent().addClass('active');
				$(this).parent().siblings().removeClass('active');
				var href = $(this).attr('href');
				$('.forms > form').hide();
				$(href).fadeIn(500);
			});
		});
  </script>
  
</body>

</html>