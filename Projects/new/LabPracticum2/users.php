<link rel="stylesheet" href="style.css" type="text/css" />
<?php
if (isset($_POST['register'])) {
    if (!empty($_POST['fname']) && (!empty($_POST['lname'])) && (!empty($_POST['email'])) && !empty($_POST['password'])) {
        
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $newEntry = $firstName.",".$lastName.",".$email.",".$password."\n";
        if (file_exists("file.txt")) {
            $handle = fopen("file.txt", "at");
            if ($handle == false) {
                echo 'The file was not found';
            } else if (fwrite($handle, $newEntry) > 0) {
                   if (file_exists("file.txt")) {
                        $getContent = file("file.txt");
                        $lines = count($getContent);
                        ?> 
                        <div class='date'>
                        <?php
                            echo "Last modified: " . date("H:i F d, Y", getlastmod()) . " EST</div>";
                        ?>
                        <div>
                        <h1>207 Enterprises</h1>
                        <h3 style="text-align: center;">Welcome <?php echo $firstName ?> <a href="index.php?status=0">Logout</a></h3>
                        <h2 >Register Users</h2>


                        <?php
                        ?>  <ul class="weekdays">
                                <li>First Name</li>
                                <li>Last Name</li>
                                <li>Email Address</li>
                            </ul>
                        <?php
                        for ($i=0; $i<$lines; $i++) {

                            $ex = explode(",", $getContent[$i]);
                            ?>

                            <ul class="values">
                                    <li><?php echo $ex[0]; ?></li>
                                    <li><?php echo $ex[1]; ?></li>
                                    <li><?php echo $ex[2]; ?></li>
                                </ul>
                            <?php
                        }
                    }
                    ?>  
                    <div class="numAccounts">Total Accounts: <?php echo $lines;?></div>
                    <br />
                    <a href="file.txt">Text File</a>
            <?php
            } else{
                    echo 'The contact was not added';
            } 
            fclose($handle);
        }
        
    }
}



if (isset($_POST['login'])) {
    if (!empty($_POST['email']) && (!empty($_POST['password']))) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $found = 0;
        if (file_exists("file.txt")) {
            $getContent = file("file.txt");
            $lines = count($getContent);
            for ($i=0; $i<$lines; $i++) {
                $ex = explode(",", $getContent[$i]);
                if ($email == $ex[2] && strcmp($password, $ex[3] == 0)/*$password == $ex[3]*/) {
                    $found = 1;
                    break;
                }
            }
        }
      
        
        
        if ($found == 1) {
            ?>
            <div>
                <div class='date'>
                <?php
                    echo "Last modified: " . date("H:i F d, Y", getlastmod()) . " EST</div>";
                ?>
                <div>
                <h1>207 Enterprises</h1>
                <h3>Welcome back <?php echo $ex[0] ?> <a href="index.php?status=0">Logout</a></h3>
                <h2>Register Users</h2>
                <form action="SorByFirstName.php" method="POST">
                    Sorted By:
                    <select name="Sort">
                        <option value="firstName">First Name</option>
                    </select>
                    <input type="submit" value="Sort" name="select"></input>
                    
                </form>
            </div>
            <?php
            if (file_exists("file.txt")) {
                $getContent = file("file.txt");
                $lines = count($getContent);
                ?>  <ul class="weekdays">
                        <li>First Name</li>
                        <li>Last Name</li>
                        <li>Email Address</li>
                    </ul>
                <?php
                for ($i=0; $i<$lines; $i++) {

                    $ex = explode(",", $getContent[$i]);
                    ?>

                    <ul class="values">
                            <li><?php echo $ex[0]; ?></li>
                            <li><?php echo $ex[1]; ?></li>
                            <li><?php echo $ex[2]; ?></li>
                        </ul>
                    <?php
                    
                }
            }
            echo "Total Accounts: $lines";
            ?><br />
            <a href="file.txt">Text File</a>
            <?php
        }else if ($found == 0) {
            header('Location: index.php?status=401');
        }else {
            header('Location: index.php?status=500');
        }         
    }else {
        echo 'A field should not be left empty';
    }
}