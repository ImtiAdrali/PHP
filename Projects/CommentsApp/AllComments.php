<link rel="stylesheet" href="labFour.css" type="text/css" />
        <link rel="stylesheet" href="style.css" type="text/css" />

<h1>Comments</h1>


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
 <div class="main">
     <h2>All Comments from File</h2>
    <?php
    if(!file_exists("comment.txt")) {
        echo 'The file does not exits';
    } else {
        $lines = file("comment.txt");
        $numLines = count($lines);
        if ($numLines == 0) {
            echo '<div class="nocomments">There were no comment added</div>';
        } else {
            $count = 1;
            for ($i=0; $i<$numLines; $i++) {
                $exp = explode(",", $lines[$i]);
                ?>

                <?php
                echo "$count. ";
                echo "Name: <a href='mailto:$exp[1]'>$exp[0]</a><br />"
                   . "Comments: $exp[2]";
                echo "<hr />";
                
                $count++;   
             
            }
        }
    } ?> 
        <br /><a href="index.php">Add New Comment</a><br /> 
        <a href="Ascending.php">Sort Comment A-Z(by name)<br /></a>
        <a href="Dec.php">Sort Comment Z-A(by name)</a><br />
         <a href="index.php">Someone Else Want to Comment?</a><br />
        <form method="POST" action="AllComments.php"> Delete Comment Number: 
            <input style="width: 25px;"type="text" name="CommentNumber"></input>
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
    <?php
        if (!empty($_POST['delete'])) {
            if (file_exists("comment.txt")) {
                $lines = file("comment.txt");
                $numLines = count($lines);
                $removeComment = $_POST['CommentNumber'] - 1;
                unset($lines[$removeComment]);
                array_values($lines);
                $freshFile = fopen("comment.txt" ,"w");
                fwrite($freshFile, implode($lines));
                header("Refresh:0");
            }
        }
       
    
    
    
    
    
    