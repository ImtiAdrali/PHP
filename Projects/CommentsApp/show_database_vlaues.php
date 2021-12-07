<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Comments</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="labFour.css" type="text/css" />
        <link rel="stylesheet" href="style.css" type="text/css" />
        
    </head>
    <body>
        <?php
		include"menu.php";
	?>
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
            <div class="main">
            <h2>All Comments from Database</h2>
            <?php
            include_once 'connection.php';
            if ($DBConnection) {
                mysqli_query($DBConnection, "USE iahmad8");
                if (isset($_POST['delete'])) {
                    if (!empty('delete')) {
                        $commentNum = $_POST['CommentNumber'];
                        $Query = "DELETE FROM comment_management WHERE id = '$commentNum'";
                        if (mysqli_query($DBConnection, $Query)) {
                            echo 'Comment deleted at index '. $commentNum;
                        } else {
                            echo "Unable to connect to the database: ";
                        }
                    }
                }   
                $printDataQuery = mysqli_query($DBConnection, "SELECT id, name, email, comment FROM comment_management");
                $records = mysqli_num_rows($printDataQuery);
                if ($records > 0) {
                    for ($i=0; $i<$records; $i++) {
                        mysqli_data_seek($printDataQuery, $i);
                        $record = mysqli_fetch_row($printDataQuery);
                        echo '<br />';
                        echo "$record[0]. ";
                        echo "Name :<a href ='mailto:$record[2]'>$record[1]</a><br/>";
                        echo "Comments : $record[3]<hr/>";
                    }
                }
            }

            ?>
            <br /></br><a href="index.php">Add New Comment</a><br /> 
            <a href="dbAsc.php">Sort Comment A-Z(by name)<br /></a>
            <a href="dbDec.php">Sort Comment Z-A(by name)</a><br />
            <a href="index.php">Someone Else Want to Comment?</a><br />
            <form action="show_database_vlaues.php" method="POST">
                Delete Comment Number: <input style="width: 25px;"type="text" name="CommentNumber"></input>
                <input type="submit" name="delete" value="Delete"></input>

            </form>
            
        </div>
            
            
            
        </div>
             <footer>
                 <p>This web site is entirely original work and full academic copyright is retained. This web site complies
                     with the Mason Honor Code (<a href="https://oai.gmu.edu/mason-honor-code/">
                         http://oai.gmu.edu/mason-honor-code/).</a></p>
             </footer>
        </div>
    </body>
</html>