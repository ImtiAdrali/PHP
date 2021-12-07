<?php

define("Host", "helios.vse.gmu.edu");
define("User", "iahmad8");
define("Password", "voopte");
define("Databse", "iahmad8");

$DBConnection = mysqli_connect(Host, User, Password, Databse) or 
        die('connection is not successful Error: '. mysqli_connect_error());