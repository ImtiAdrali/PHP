<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
 <title>Update Contact</title>
</head>
<body>
<?php

if(!empty($_POST["new_firstname"]) && !empty($_POST["new_lastname"]) && !empty($_POST["new_email"]) && !empty($_POST["new_number"]) && !empty($_POST["new_address"]) && !empty($_POST["new_city"]) && !empty($_POST["new_state"]) && !empty($_POST["new_zip"]))
{
 $newEntry = "--" . $_POST['new_firstname'] . "," . $_POST['new_lastname'] . "," . $_POST['new_email'] . "," . $_POST['new_number'] . "," . $_POST['new_address'] . "," . $_POST['new_city'] . "," . $_POST['new_state'] . "," . $_POST['new_zip'];
 if(file_exists("PhoneBook.txt"))
 {
 	$FileRead = fopen("PhoneBook.txt","r+");
      
            
            $FileContent = fgets($FileRead);
            //$explode = explode(",", $FileContent);
          
      
  	$Fields = explode("--",$FileContent);
        
    
    $count = count($Fields);
    for($i=1;$i<$count;$i++)
    {
      
      $Field = explode(",",$Fields[$i]);
      global $fname;
      global $lname;
      if(!(strcasecmp($Field[0],$_POST['new_firstname'])) && !(strcasecmp($Field[1],$_POST["new_lastname"])))
       {
        $Fields[$i] = $newEntry;
        $openFile = fopen("PhoneBook.txt","w");
        {
        	if(fwrite($openFile,$Fields[$i])>0)
        	  echo "<p> Edit is succeffull</p>";
            else
              echo "<p> Edit is failed </p>";
        }
        fclose($openFile);
       }
     }
     fclose($FileRead);
 }
}

/*if (isset($_POST['update'])) {
    if(!empty($_POST["new_firstname"]) && !empty($_POST["new_lastname"]) && !empty($_POST["new_email"]) 
            && !empty($_POST["new_number"]) && !empty($_POST["new_address"])
            && !empty($_POST["new_city"]) && !empty($_POST["new_state"]) && !empty($_POST["new_zip"])) {
        $newfName = $_POST["new_firstname"];
        $newlName = $_POST["new_lastname"];
        $newEmail = $_POST["new_email"];
        $newNumber = $_POST["new_number"];
        $newAddress = $_POST["new_address"];
        $newCity = $_POST["new_city"];
        $newState = $_POST["new_state"];
        $newZip = $_POST["new_zip"];
        
        $newContact = "--$newfName,$newlName,$newEmail,$newNumber,$newAddress,$newCity,$newState,$newZip";
        
        
    }
}*/

?>
</body>
</html>