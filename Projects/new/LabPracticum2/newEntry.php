<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Login | 207 Enterprises</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
    <div class='date'>
                <?php
                    echo "Last modified: " . date("H:i F d, Y", getlastmod()) . " EST</div>";
                ?>
                <div>
    <div class="mainBody">
	<h1>207 Enterprises</h1>
  <?php
	/*if(isset($_GET['status']) && $_GET['status']==0)
		echo "<div'>Logged Out Successfully</div>";
	else if(isset($_GET['status']) && $_GET['status']==401)
		echo "<div>Error: Invalid email address or password</div>";*/
	?>
        <div class="register">Please register an account</div>
	<form action="users.php" method="post">
		<p>
			First Name
			<input name="fname" type="text" placeholder="First Name"/>
		</p>
		<p>
			Last Name
                        <input name="lname" type="text" placeholder="Last Name"/>
		</p>
                <p>
			Email
			<input name="email" type="text" placeholder="Email"/>
		</p>
		<p>
			Password
			<input name="password" type="password" placeholder="Password"/>
		</p>
		<p>
			<input name="register" type="submit" value="Register" />
			<span> or </span>
                        <a href="login.php">Login</a>
		</p>
	</form>
</div>
</body>
</html>
