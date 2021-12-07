<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Add New Contact</title>
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
               <h1>New Contact Entry</h1>
               <form method="post" action="contacts.php">
                   First Name <input type="text" name= "firstName"/>
                   Name <input type = "text" name= "lastName"/><br/><br/>
                   Email Address <input type = "text" name= "email"/><br/><br/>
                   Phone Number <input type = "text" name= "phonenumber"/><br/><br/>
                   Address <input type = "text" name= "address"/>
                   City <input type = "text" name= "city"/><br/><br/>
                   State <select name="state">
                   <option value="AL">Alabama</option>
                   <option value="AK">Alaska</option>
                   <option value="AZ">Arizona</option>
                   <option value="AR">Arkansas</option>
                   <option value="CA">California</option>
                   <option value="CO">Colorado</option>
                   <option value="CT">Connecticut</option>
                   <option value="DE">Delaware</option>
                   <option value="DC">Dist of Columbia</option>
                   <option value="FL">Florida</option>
                   <option value="GA">Georgia</option>
                   <option value="HI">Hawaii</option>
                   <option value="ID">Idaho</option>
                   <option value="IL">Illinois</option>
                   <option value="IN">Indiana</option>
                   <option value="IA">Iowa</option>
                   <option value="KS">Kansas</option>
                   <option value="KY">Kentucky</option>
                   <option value="LA">Louisiana</option>
                   <option value="ME">Maine</option>
                   <option value="MD">Maryland</option>
                   <option value="MA">Massachusetts</option>
                   <option value="MI">Michigan</option>
                   <option value="MN">Minnesota</option>
                   <option value="MS">Mississippi</option>
                   <option value="MO">Missouri</option>
                   <option value="MT">Montana</option>
                   <option value="NE">Nebraska</option>
                   <option value="NV">Nevada</option>
                   <option value="NH">New Hampshire</option>
                   <option value="NJ">New Jersey</option>
                   <option value="NM">New Mexico</option>
                   <option value="NY">New York</option>
                   <option value="NC">North Carolina</option>
                   <option value="ND">North Dakota</option>
                   <option value="OH">Ohio</option>
                   <option value="OK">Oklahoma</option>
                   <option value="OR">Oregon</option>
                   <option value="PA">Pennsylvania</option>
                   <option value="RI">Rhode Island</option>
                   <option value="SC">South Carolina</option>
                   <option value="SD">South Dakota</option>
                   <option value="TN">Tennessee</option>
                   <option value="TX">Texas</option>
                   <option value="UT">Utah</option>
                   <option value="VT">Vermont</option>
                   <option value="VA">Virginia</option>
                   <option value="WA">Washington</option>
                   <option value="WV">West Virginia</option>
                   <option value="WI">Wisconsin</option>
                   <option value="WY">Wyoming</option>
                   </select>
                   Zip<input type = "text" name= "zip"/><br/>
                   <br /><br />
                   <input type = "submit" name="add" value = "Add Entry" />
               </form>
               <hr />
               <br /><a href="index.php">Return to Directory</a>
           
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






