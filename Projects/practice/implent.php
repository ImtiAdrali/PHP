<?php
    if (isset($_POST['submit'])) {
        if (!empty($_POST['name']) && !empty($_POST['address']) && !empty($_POST['city'])) {
            $name = $_POST['name'];
            $address = $_POST['address'];
            $city = $_POST['city'];
        }
        $add = $name.",".$address.",".$city."\n";
        $file = fopen("l.txt", "a");
        if (fwrite($file, $add) > 0) {
            echo 'done';
        }
    }
    
    
    
    if (isset($_POST['search'])){
        if (!empty($_POST['nameSearch'])){
            $searchname = $_POST["nameSearch"];
            $handle = fopen("l.txt", "r");
            $wholeContact = fgets($handle);
            //while (!feof($handle)) {
                $curContact = explode(",", $wholeContact);
                if ($searchname == $curContact[0]) {
                    echo "Search was success";
                }
            //}
              
        }
    }
                
                
            
                
                
                
            
        
    
    
    
    if (isset($_POST['update'])) {
        if (!empty($_POST['Newname']) && !empty($_POST['Newaddress']) && !empty($_POST['Newcity'])) {
            $Nname = $_POST['Newname'];
            $Naddress = $_POST['Newaddress'];
            $Ncity = $_POST['Newcity'];
            
            $updatedContact = $Nname.",".$Naddress.",".$Ncity."\n";
            $file = fopen("l.txt", "r+t");
            $FileContent = file_get_contents("l.txt");
            $explode = explode("\n", $FileContent);
            print_r($explode);
            $numLines  = count($explode);
            for ($i=0; $i<$numLines; $i++) {
               $oneLineEx = explode(",", $explode[$i]);
                    
            }
        
                   
        }else {
            echo 'empty';
        }
    }
    
    
    
    
    
    