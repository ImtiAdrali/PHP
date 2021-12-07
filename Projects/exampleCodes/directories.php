<form action="directories.php" method="POST">
    piece: <input type="text" name="pieces"></input>
    <input type="submit" name="submit" value="Submit"></input>
</form>
    
<?php

if (isset($_POST['submit'])) {
    if (!empty($_POST['pieces'])) {
        $p = $_POST['pieces'];
        $file = fopen("newfile.txt", "r");
        
        
    }else {
        echo 'HI';
    }
}




