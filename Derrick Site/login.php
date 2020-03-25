<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login | SageIT Services</title>
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>

      <link rel="stylesheet" href="css/login_style.css">

  
</head>

<body>

  <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
		<div class="login-form">
			<div class="sign-in-htm">
				<form action="login.php" method="POST">
					<div class="group">
							<label for="user" class="label">Email</label>
							<input id="email" type="email" class="input" name="email" required>
						</div>
						<div class="group">
							<label for="pass" class="label">Password</label>
							<input id="pass" type="password" class="input" name = "pass" data-type="password" required>
						</div>
						<div class="group">
							<input id="check" type="checkbox" class="check" checked>
							<label for="check"><span class="icon"></span> Keep me Signed in</label>
						</div>
						<div class="group">
							<input type="submit" class="button" value="Sign In">
						</div>
						<a href ='#' id="success" style="display:none;" style="color:red;">Welcome</a>
						<div class="hr"></div>
						<div class="foot-lnk">
							<a href="#forgot">Forgot Password?</a>
						</div>
				</form>
				
			</div>
			<!-- <div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" type="text" class="input">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div> -->
		</div>
	</div>
</div>
  
  

</body>

</html>

<?php
// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['email'], $_POST['pass']) ) {
	// Could not get the data that should have been sent.
	// die ('Please fill both the username and password field!');
}else{
	echo "<script>
		var loading = document.getElementById('success');
		loading.innerHTML = 'loading';
		load.style.display = 'block';
		loading.innerHTML('loading...');
	</script>";
    require_once('forms/config.php');
    session_start();
    $login_query = $con->prepare("SELECT COUNT(1) AS num FROM users WHERE email = ? and password = ?");
    
    $login_query->execute(array($_POST['email'],$_POST['pass']));
    $login_check = $login_query->fetch();
    
    if($login_check["num"] == 1){
        // session_regenerate_id();
        $_SESSION['loggedin'] = TRUE;
        // $_SESSION['name'] = $_POST['email'];
        // $_SESSION['id'] = $id;
        setcookie("isloggedin","true",time() + (6400), "/");
		echo "<script>
			// alert('Login successful');
			var done = document.getElementById('success');
			done.style.display = 'block';
			loading.innerHTML = 'Welcome';
		</script>";
	header('Location: dashboard.php');
    }else{
		// die ("Incorrect User ID or Pin");
		echo "<script>
			// alert('Login successful');
			var done = document.getElementById('success');
			done.style.display = 'block';
			loading.innerHTML = 'Incorrect User ID or Pin';
		</script>";
    }
}

?>
