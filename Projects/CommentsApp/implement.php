<link rel="stylesheet" href="labFour.css" type="text/css" />
        <link rel="stylesheet" href="style.css" type="text/css" />



<?php include"menu.php"; ?>
	
	<div class="StudentCourse">
                     <div class="course">
                         <h2>IT207 (Spring 2021)</h2>
                         <p>Rajendra Mallampati
                             <br />
                            <?php
                                echo "George Mason University";
                            ?>
                            </p>

                     </div>
                    
                     <div class="student">
                         <h2>Imtiaz Ahmad</h2>
                         <p><a href="mailto:iahmad8@gmu.edu">iahmad8@gmu.edu</a><br />
                             <?php
                                echo "Last modified: " . date("H:i F d, Y", getlastmod()) . " EST";
                               
                             ?>
                         </p>

                     </div>
            </div>
<div class="added" style="top: 20%; left: 20%; position: absolute;">
<?php
//define("FileName", comment.txt);
    if (isset($_POST['sign'])) {
        if (!empty($_POST['name']) && !empty($_POST['email'])
                && !empty($_POST['comment'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $comment = $_POST['comment'];
            $found = 0;
            
            $NewComment = $name.",".$email.",".$comment."\n";
            if (file_exists("comment.txt")) {
                $getContent = file("comment.txt");
                $lines = count($getContent);
                for ($i=0; $i<$lines; $i++) {
                    $ex = explode(",", $getContent[$i]);
                    if (strcmp($name, $ex[0]) == 0) {
                        $found = 1;
                        break;
                    }
                }
            }
            
            if ($found == 1) {
                echo "<h1> Comments Not Added To File</h1>"
                . "<hr />One per person! You have already left comment for this posting."
                . "<hr />";
            } else {
                $handle = fopen("comment.txt", "a");
                if (fwrite($handle, $NewComment) > 0){
                    ?>
                    <h1>Comments Added To File</h1>
                    <hr />
                    Name: <a href="mailto: $name"><?php echo $name; ?> </a><br />
                    Comments: <?php echo $comment?>
                    <hr />
                    <?php
                   fclose($handle);
                }
            }
        }
    }
    ?> <a href="index.php">Someone Else Want to Comment?</a><br />
    <a href="AllComments.php">View Posing Comments</a><br />
</div>    

        </div>
             <footer>
                 <p>This web site is entirely original work and full academic copyright is retained. This web site complies
                     with the Mason Honor Code (<a href="https://oai.gmu.edu/mason-honor-code/">
                         http://oai.gmu.edu/mason-honor-code/).</a></p>
             </footer>
        </div>    
<div id="dbmain" style="position: absolute; width: 40%; left: 60%; top: 20%">    
   
<?php
    include_once 'connection.php';
    /*if ($DBConnection === false) {
        echo 'Connect lost';
    } else {
        $insertData = "INSERT INTO comment_management (id, name, email, comment) VALUE (null, '$name', '$email', '$comment');";
        if (mysqli_query($DBConnection, $insertData)) {
            echo 'done';
        } else {
            echo 'not done';
        }
    }*/
    
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['comment']) ) {
        $count = 0;
        
        if ($DBConnection) {
            mysqli_query($DBConnection, "USE iahmad8");
            $output = mysqli_query($DBConnection, "SELECT id, name, email, comment FROM comment_management");
            $records = mysqli_num_rows($output);
            if ($records > 0) {
                for ($i=0; $i<$records; $i++) {
                    mysqli_data_seek($output, $i);
                    $record = mysqli_fetch_row($output);
                    if (strcmp($name, $record[1]) == 0) {
                        $count = 1;
                        break;
                    }
                }
            }
            include_once 'connection.php';
            if ($count == 1) {
                echo "<h1> Comments Not Added To Database</h1>"
                . "<hr />One per person! You have already left comment for this posting."
                . "<hr />";
            } else {
                $addData = "INSERT INTO comment_management (id, name, email, comment) VALUE (null, '$name', '$email', '$comment');";
                if (mysqli_query($DBConnection, $addData)) {
                    echo '<h1>Comment added to database.</h1><hr />';
                    echo "Name: <a href='mailto: $name'>$name</a><br />".
                    "Comments: $comment";
                    echo '<br /><hr />';
                }else {
                    echo 'Somethings not right';
                }
            }
        }
        
    }?>
    <a href="index.php">Someone Else Want to Comment?</a><br />
    <a href="show_database_vlaues.php">View Posing Comments</a><br />
</div>    