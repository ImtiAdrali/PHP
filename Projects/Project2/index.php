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
		echo "<div class='warning'><b>Logged Out Successfully</b></div>";
	else if(isset($_GET['status']) && $_GET['status']==401)
		echo "<div class='warning'><b>Error: Invalid email address or password</b></div>";
        else if(isset($_GET['status']) && $_GET['status'] == 500)
                echo "<div class='warning'><b>Error: Internal server error**</b></div>";
	?>
        <div class="login"><h1>Please log in to continue</h1></div>
	<form action="users.php" method="post">
		<p>
                    <strong>Email</strong>
			<input name="email" type="text" placeholder="Email"/>
		</p>
		<p>
                        <strong>Password</strong>
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
