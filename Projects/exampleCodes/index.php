<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Toner Cartridge Sales</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style1.css" type="text/css" />
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
        
        <div class="formContent">
           
               <h1>Online Contacts Directory</h1>
               <h3>Search for a Contact</h3>
               <form method="post" action="contacts.php">
                   <p>First Name <input type = "text" name= "firstName"/><br/><br />
                   Last Name <input type = "text" name= "lastName"/></p><br/>
                   <input type = "submit" name="Search" value = "Search" />
               </form>
               <hr />
               <a href="addContact.php">Add New Contact Entry</a>
           
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






