<link rel="stylesheet" href="style1.css" type="text/css" />
<link rel="stylesheet" href="style.css" type="text/css" />
<div id="labcontent">
           <div class="directory">
           <?php
              
                       if(isset($_POST['add'])){
                           if(!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['email']) && !empty($_POST['phonenumber']) && !empty($_POST['address'])
                                   && !empty($_POST['city']) && !empty($_POST['state']) && !empty($_POST['zip'])){
                                      
                                       $firstName = $_POST['firstName'];
                                       $lastName = $_POST['lastName'];
                                       $emailAdress = $_POST['email'];
                                       $phoneNumber = $_POST['phonenumber'];
                                       $address = $_POST['address'];
                                       $city = $_POST['city'];
                                       $state = $_POST['state'];
                                       $zipCode = $_POST['zip'];
                                       $addContact = $firstName.",".$lastName.",".$emailAdress.",".$phoneNumber.",".$address.",".$city.",".$state.",".$zipCode."\n";
                                      
                                       $handle = fopen("phone.txt","at");
                                       if($handle == false){
                                           echo "The file does not exists";
                                       }else if (flock($handle, LOCK_EX)){
                                                       if(fwrite($handle, $addContact) > 0){
                                                           echo "Contact was successfully added";
                                                           ?>  <hr /> <a href="index.php">Return to Directory</a><?php
                                                       }else{
                                                           echo "Unable to add Contact";
                                                       }
                                                       flock($handle, LOCK_UN);
                                        }
                                       fclose($handle);                                      
                           }
                           else{
                               echo "<p>You must enter a value in each field. Click your browser's Back button to return to the form.</p>"; 
                               ?> <hr /><a href="index.php">Return to Directory</a> <?php
                           }          
                       }
                      
                       if(isset($_POST['Search'])){
                           if(!empty($_POST['firstName']) && !empty($_POST['lastName'])){
                               $firstName = $_POST['firstName'];
                               $lastName = $_POST['lastName'];
      
                              
                               $handle = fopen("phone.txt","r");
                                   $wholeContact = fgets($handle);
                                  
                                   while(!feof($handle)){
                                       $Contact = explode(",", $wholeContact);                                                                      
                                       if(strcmp($firstName,$Contact[0]) == 0 && strcmp($lastName,$Contact[1] == 0)){
                                          
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
                  
                                            <form method="post" action="">
                                               <p>First Name <input type = "text" name= "firstName" value="<?php echo $Contact[0];?>"/>
                                               Name <input type = "text" name= "lastName" value="<?php echo $Contact[1];?>"/><br/><br/>
                                               Email Address <input type = "text" name= "email" value="<?php echo $Contact[2];?>"/><br/><br/>
                                               Phone Number <input type = "text" name= "phone" value="<?php echo $Contact[3];?>"/><br/><br/>
                                               Address <input type = "text" name= "address" value="<?php echo $Contact[4];?>"/>
                                               City <input type = "text" name= "city" value="<?php echo $Contact[5];?>"/><br/><br/>
                                               State <select name="state" size="1" value="<?php echo $Contact[6];?>">
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
                                               Zip <input type = "text" name= "zip" value="<?php echo $Contact[7];?>"/></p><br/>
                                               <input type = "submit" name="update" value = "Update Entry" />
                                           </form>
                   <hr />
                       <br /><a href="index.php">Return to Directory</a>
                   </div>
                               </div>
             <footer>
                 <p>This web site is entirely original work and full academic copyright is retained. This web site complies
                     with the Mason Honor Code (<a href="https://oai.gmu.edu/mason-honor-code/">
                         http://oai.gmu.edu/mason-honor-code/).</a></p>
             </footer>
        </div>
           <?php
                                           break;
                                       }else{                                      
                                           $wholeContact = fgets($handle);
                                       }
                                      
                                   }
                                   if(feof($handle)){
                                       echo "Unable to find the contact";
                                       ?> <hr /><a href="index.php">Return to Directory</a> <?php
                                   }
                                  
                               fclose($handle);
                           }else{
                               echo "<p>You must enter a value in each field. Click your browser's Back button to return to the form.</p>";
                               ?> <hr /><a href="index.php">Return to Directory</a> <?php
                           }                      
                       }
                      
                       if(isset($_POST['update'])){
                           if(!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['address'])
                                   && !empty($_POST['city']) && !empty($_POST['state']) && !empty($_POST['zip'])){
                                      
                                       $firstName = $_POST['firstName'];
                                       $lastName = $_POST['lastName'];
                                       $email = $_POST['email'];
                                       $phone = $_POST['phone'];
                                       $address = $_POST['address'];
                                       $city = $_POST['city'];
                                       $state = $_POST['state'];
                                       $zip = $_POST['zip'];
                                       $updatedContact = "$firstName,$lastName,$email,$phone,$address,$city,$state,$zip\n";
                                       $explodedUpdatedContact = explode(",",$updatedContact);
                                      
                                       $handle = fopen("phone.txt","r+t");
                                       if($handle == false){
                                           echo "The directory text file does not exist.";
                                       }else{
                                                   if(flock($handle,LOCK_EX && LOCK_SH)){
                                                          
                                                           $Line = fgets($handle);
                                                           while(!feof($handle)){
                                                               $Contact = explode(",", $Line);
                                                             
                                                               if(strcmp($firstName,$Contact[0]) == 0 && strcmp($lastName,$Contact[1] == 0)){
                                                                                          
                                                                   if(fwrite($handle, implode(",",str_replace($Contact,$explodedUpdatedContact,$Contact))) > 0){
                                                                       echo "<p> Contact Updated</p>";
                                                                       ?> <hr /><a href="index.php">Return to Directory</a> <?php
                                                                   }else{
                                                                       echo "<p>Unable to update the contact";
                                                                   }
                                                                   break;
                                                               }else{
                                                                       $Line = fgets($handle);
                                                               }
                                                           }      
                                                       flock($handle, LOCK_UN);
                                                   }else{
                                                           echo "<p>Unable to write to the file</p>";
                                                   }
                                                   fclose($handle);                                                                          
                                       }                  
                           }else{
                               echo "<p>You must enter a value in each field. Click your browser's Back button to return to the form.</p>";   
                               ?><hr /><a href="index.php">Return to Directory</a> <?php
                           }          
                       }
                      
           ?>
                      
          
                       
          
                         
              
           </div>
   </div>
