<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title>New Contact</title>
</head>
<body>
    <?php
    $Mother_side = array("Grand Pareant" => "Zada", "Aunt" => "Maan",
        "Uncle" => "Usaf", "Cousin" => "Waqar");
    print_r($Mother_side);
    echo "<br />";
    echo "<br />";

    $Father_side =  array("Grand Parent" => "Kachkol",
                            "Aunt" => "Sumaia",
                            "Uncle" => "Nasir",
                            "Cousin" => "Imaad");

    print_r($Father_side);
    echo "<br />";
    echo "<br />";

    $merge = array_merge($Mother_side, $Father_side);
    sort($merge);
    print_r($merge);
    echo "<br />";
?>
    
</body>
</html>


