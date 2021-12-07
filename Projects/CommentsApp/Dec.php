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
<div id="main">
<h1>Comments</h1>
<?php
echo "<br />";
$handle = fopen("comment.txt", "r");
$fileCo = file("comment.txt");
rsort($fileCo);
$count = count($fileCo);
for ($i=0; $i<$count; $i++) {
    ?> <hr />       <?php  
    echo ($i + 1).".";
    echo $fileCo[$i];
}
?> <br /><br /><a href="index.php">Add New Comment</a><br /> 
 <a href="AllComments.php">View Posing Comments</a><br />
    <a href="Ascending.php">Sort Comment A-Z(by name)<br /></a>
    <a href="Dec.php">Sort Comment Z-A(by name)<br /></a>
<!--    <form method="POST" action="#"> Delete Comment Number: <input type="text" name="CommentNumber"></input>
        <input type="submit" name="delete" value="Delete"></input>
    </form>-->
</div>
</div>        
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
