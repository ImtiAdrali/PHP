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
        <h2>Huh?</h2>
        <div class="main">
            <p><strong>Kirschner and Karpinski reported that:</strong><br />
            Students who used social networking sited while studying scored 20% lower on tests and students who used social media
            had an average GPA of 3.06 versus non-users who has an average GPA of 3.82.<br />
            <strong>Source</strong>: Paul A.Kirchner and Aryn C.Karpinski, "Facebook and Academic Performance"
            Computers in Human Behavior, Nov. 2010 </p>
            <h1>Add Comments</h1>

            <hr />
            <div class="commentForm">
                <form action="implement.php" method="POST">
                    Name: <input type="text" name="name" placeholder="Name"></input><br /><br />
                    E-mail: <input type="text" name="email" placeholder="Email"></input><br /><br/>
                    Comments: <textarea name="comment" rows="5" cols="40" placeholder="Enter Comment here"></textarea><br /><br />
                   <input type="submit" name="sign" value="Sign"></input>
                   <input type="reset" name="resetform" value="Reset Form"></input>
               </form>
            </div>
            <hr />
            <a href="AllComments.php">View Posting Comments From File</a> ||
            <a href="show_database_vlaues.php">View Posting Comments From DataBase</a>
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




    