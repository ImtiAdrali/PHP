<link rel="stylesheet" href="style1.css" type="text/css" />
<link rel="stylesheet" href="style.css" type="text/css" />
<?php
    if (isset($_POST['addentry'])) {
        if (!empty($_POST['Nname']) && !empty($_POST['Nlname']) && !empty($_POST['Eaddress'])
            && !empty($_POST['Pnumber']) && !empty($_POST['address']) && !empty($_POST['city'])
            && !empty($_POST['states']) && !empty($_POST['zip'])){
            
            $FName = $_POST['Nname'];
            $LName = $_POST['Nlname']; 
            $Email = $_POST['Eaddress'];
            $Number = $_POST['Pnumber'];
            $Address = $_POST['address'];
            $City = $_POST['city'];
            $State = $_POST['states'];
            $Zip = $_POST['zip'];
            
            $ContactToAdd = "->".$FName.",".$LName.",".$Email.",".$Number.",".$Address.",".$City.",".$State.",".$Zip."\n";
            $handle = fopen("contact.txt", "at");
            if ($handle == false) {
                echo 'The file was not found';
            } else if (fwrite($handle, $ContactToAdd) > 0) {
                   echo 'The contact was added';
                   ?><hr /> <a href="index.php">Return to Directory</a><?php

            } else{
                    echo 'The contact was not added';
            } 
            fclose($handle);
            
        } else {
            echo 'You must enter a value in each field. Chick the browser\'s Back button to return '
            . 'to the form<hr /><a href="index.php">Return to Directory</a>';
        }
    }
    
    if (isset($_POST['search'])) {
        if (!empty($_POST['name']) && !empty($_POST['lname'])) {
            $fname = $_POST['name'];
            $lname = $_POST['lname'];
            $counter = 0;
            
            if (file_exists("contact.txt")) {
                $file = fopen("contact.txt","r");
                $content = file_get_contents("contact.txt");
    
                $records = explode("->",$content);
                $c = count($records);
                
                for($i=1;$i<$c;$i++){
                    $record = explode(",",$records[$i]);
                    if((!strcasecmp($record[0],$fname)) && (!strcasecmp($record[1],$lname))){
                        $counter = 1;
                       ?>
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
                    <form method="POST" action="update.php">
                                               <p>First Name <input type = "text" name= "firstName" value="<?php echo $record[0];?>"/>
                                               Name <input type = "text" name= "lastName" value="<?php echo $record[1];?>"/><br/><br/>
                                               Email Address <input type = "text" name= "email" value="<?php echo $record[2];?>"/><br/><br/>
                                               Phone Number <input type = "text" name= "phone" value="<?php echo $record[3];?>"/><br/><br/>
                                               Address <input type = "text" name= "address" value="<?php echo $record[4];?>"/>
                                               &nbspCity <input type = "text" name= "city" value="<?php echo $record[5];?>"/><br/><br/>
                                               State <select name="state" size="1" value="<?php echo $record[6];?>">
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
                                                <input type = "text" name= "zip" value="<?php echo $record[7];?>"/></p><br/>
                                               <input type = "submit" name="updateEntry" value = "Update Entry" />
                                           </form>
                                           <hr />
                <a href = "index.php"> Return to search page </a>
                </div>
                   </div>
             <footer>
                 <p>This web site is entirely original work and full academic copyright is retained. This web site complies
                     with the Mason Honor Code (<a href="https://oai.gmu.edu/mason-honor-code/">
                         http://oai.gmu.edu/mason-honor-code/).</a></p>
             </footer>
        </div>
     
                <?php
                }
            }
            if(!empty($fname) && !empty($lname) && $counter == 0){
                echo "<p> Contact Not Found</p>";
            }
        }

    }else {
        echo 'You must enter a value in each field. Chick the browser\'s Back button to return '
            . 'to the form<hr /><a href="index.php">Return to Directory</a>';
    }
        
    }
    
    
   