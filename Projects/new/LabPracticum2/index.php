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
	if(isset($_GET['status']) && $_GET['status']==0)
		echo "<div class='warning'>Logged Out Successfully</div>";
	else if(isset($_GET['status']) && $_GET['status']==401)
		echo "<div class='warning'>Error: Invalid email address or password</div>";
        else if(isset($_GET['status']) && $_GET['status'] == 500)
                echo "<div class='warning'>Error: Internal server error**</div>";
	?>
        <div class="login"><h1>Please log in to continue</h1></div>
	<form action="users.php" method="post">
		<p>
			Email
			<input name="email" type="text" placeholder="Email"/>
		</p>
		<p>
			Password
			<input name="password" type="password" placeholder="Password"/>
		</p>
		<p>
			<input name="login" type="submit" value="Login" />
			<span> or </span>
                        <a href="Holder.html">Register new account</a>
		</p>
	</form>
        <?php
       
        ?>
</div>
</body>
</html>
