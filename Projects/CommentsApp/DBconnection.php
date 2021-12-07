<?php

include_once 'connection.php';
if ($DBConnection == false) {
    echo 'Hello I am soryy';
} else {
    /*echo 'Hello';
    $createTable = "CREATE TABLE comment_management(id INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY, "
            . "name VARCHAR(50),"
            . "email VARCHAR(150),"
            . "comment VARCHAR(1000));";
    $QueryResult = @mysqli_query($DBConnection, $createTable);
    if ($QueryResult === FALSE) {
        echo "<p> Unable to execute the quesry.</p>"
        . "<p>Error code " . mysqli_errno($DBConnection).
        ": ". mysqli_error($DBConnection). "</p>";
    } else {
        echo "<p>Successfully created the table.</p>";
    }*/
    $query = "INSERT INTO comment_management (id, name, email, comment)"
            . "VALUE ('null', 'izaz', 'ia2464@gmail.com', 'what up')";
    if (mysqli_query($DBConnection, $query)) {
        echo 'Good';
    } else {
        echo 'bad';
    }
}

