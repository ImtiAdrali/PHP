
<?php
if(isset($_POST['updateEntry'])){
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
                
                
                $updatedContact = "->".$firstName.",".$lastName.",".$email.",".$phone.",".$address.",".$city.",".$state.",".$zip."\n";
                //$explodedUpdatedContact = explode(",",$updatedContact);
                if (file_exists("contact.txt")){
                    $file = fopen("contact.txt","r");
                    $content = file_get_contents("contact.txt");
    
                    $records = explode("->",$content);
                }

                $counter = count($records);
                for($i=1;$i<$counter;$i++){
                    $record = explode(",",$records[$i]);

                    if((!strcasecmp($record[0],$firstName)) && (!strcasecmp($record[1],$lastName))){
                        $records[$i] = $updatedContact;
                        $FileOpen = fopen("contact.txt","ab+");
                      
                              if(fwrite($FileOpen,$records[$i])>0)
                                echo "<p> Edit is succeffull</p>";
                          else
                            echo "<p> Edit is failed </p>";
                      
                    }
                }
                
            }   
    }  
    ?>
<hr />
<a href="index.php">Return to Directory </a>
                  