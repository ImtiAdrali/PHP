<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title> Search Directory</title>
</head>
<body>
<?php

if(!empty($_POST["firstname"]) && !empty($_POST["lastname"]))
{
  $found = 0;
  $fname = $_POST["firstname"];
  $lname = $_POST["lastname"];
  if(file_exists("PhoneBook.txt"))
  {
  	$handle = fopen("PhoneBook.txt","r");
  	$wholeContact = fgets($handle);
   
    while (!feof($handle)){
        $Field = explode(",", $$wholeContact);
        if (strcmp($fname, $Field[0])==0 && strcmp($lname, $Field[1])==0){
        $found = 1;
        ?>
    <form method ='post' action =''>
            <p>First Name <input type ='text' name ='new_firstname' value = <?php echo $Field[0]; ?>>
                 Last Name <input type ='text' name ='new_lastname' value = <?php echo $Field[1]; ?>><br/><br/>
                 Email Address <input type ='text' name='new_email' value = <?php echo $Field[2]; ?>><br/><br/>
                 Phone Number <input type = 'text' name='new_number' value = <?php echo $Field[3]; ?>><br/><br/>
                 Address <input type = 'text' name ='new_address' value = <?php echo $Field[4]; ?>>
                 City <input type ='text' name ='new_city' value = <?php echo $Field[5]; ?>><br/><br/>
                 State <select name ='new_state' value = <?php echo $Field[6]; ?>'>
                <option value = 'Arizona'>Arizona</option>
                <option value = 'California'>California</option>
                <option value = 'Texas'>Texas</option>
                <option value = 'Virginia'>Virginia</option>
                <option value = 'Washington'>Washington</option>
                <option value = 'WestVirginia'>West Virginia</option></select>
                Zip <input type = 'text' name='new_zip' value = <?php echo $Field[7]; ?>>
                <input type = 'submit' name='update' value='Update info'>
                <input type='hidden' name='old_entry' value=<?php echo $Field[$i]; ?> />
              </p>
             </form>
        <?php
        echo "<p><b> Click on Update to update your info or click here to go back</b></p>";
        echo '<a href = "index.html"> Return to search page </a>';
       }
       
       
       
      
    }
      
   if(!empty($fname) && !empty($lname) && $found == 0){
     echo "<p> Contact Not Found</p>";
     echo '<a href ="index.html"> Return to search page </a>';
   }
  }
}
else
{
	echo"<p> Enter both first name and last name</p>";
	echo '<a href ="index.html"> Return to search page </a>';
}
echo "<br />";

if(!empty($_POST["new_firstname"]) && !empty($_POST["new_lastname"]) && !empty($_POST["new_email"]) && !empty($_POST["new_number"]) && !empty($_POST["new_address"]) && !empty($_POST["new_city"]) && !empty($_POST["new_state"]) && !empty($_POST["new_zip"]))
{
 $newEntry = $_POST['new_firstname'] . "," . $_POST['new_lastname'] . "," . $_POST['new_email'] . "," . $_POST['new_number'] . "," . $_POST['new_address'] . "," . $_POST['new_city'] . "," . $_POST['new_state'] . "," . $_POST['new_zip'];
 if(file_exists("PhoneBook.txt"))
 {
 	$FileRead = fopen("PhoneBook.txt","r+");
      
            
            $FileContent = fgets($FileRead);
            //$explode = explode(",", $FileContent);
          
      
  	//$Fields = explode("--",$FileContent);
        
    
    $count = count($Fields);
    echo $count;
    for($i=1;$i<$count;$i++)
    {
      
      $Field = explode(",",$Fields[$i]);
     global $fname;
     global $lname;
      if(!(strcmp($Field[0],$fname) == 0) && !(strcmp($Field[1],$lname) == 0))
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
        $exoplodeNewContact = explode('--', $newContact);
        //print_r($exoplodeNewContact);
        echo "<br />";
        echo "<br />";
        $handle = fopen("PhoneBook.txt", "r+t");
        $curLine = fgets($handle);
        
        
       //$f = explode("--", fgets($handle));
       //print_r($f);
        $counter = 0;
        while (!feof($handle)) {
            $currentContact = explode("--", $curLine);
            global $fname;
            global $lname;
            if (strcmp($newfName, $currentContact[0])==0 && (strcmp($newlName, $currentContact[1])) == 0){
                if(fwrite($handle, implode(",", str_replace($currentContact, $exoplodeNewContact, $currentContact))) > 0){
                    echo 'Hello';
                }
            }
            
            
            /*$fileCon = explode(',', fgets($handle));
            $counter++;
            print_r($fileCon);
            if (strcmp($fname, $fileCon[0])==0 && (strcmp($lname, $fileCon[1])) == 0){
                echo 'Hello';
//                 if (fwrite($handle, implode(",", str_replace($fileCon, $exoplodeNewContact, $fileCon)) > 0)) {
//                    echo 'Hello';
//                }
            } else {
                echo 'Hi';
            }
            
            //print_r($currentContact);
            
            if ($fname == $currentContact[0] && $lname == $currentContact[1]) {
                if (fwrite($handle, implode(",", str_replace($currentContact, $exoplodeNewContact, $currentContact)))) {
                    echo 'Hello';
                }
            }
            $curLine = fgets($handle);
        }
        echo $counter;
        fclose($handle);
    }
}*/

?>
</body>
</html>