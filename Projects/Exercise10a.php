<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title>New Contact</title>
</head>
<body>

    <?php
    $Great_Lakes = array("Superior", "Michigan", "Huron", "Erie", "Ontario");
    array_splice($Great_Lakes, -2, 0, array("Lake Tahoe", "lliamna Lake"));

    print_r($Great_Lakes);
    echo '<br />';
    echo '<br />';
    array_splice($Great_Lakes, -2, 2);
    print_r($Great_Lakes);

    echo '<br />';
    echo '<br />';
    $My_fav = array_slice($Great_Lakes, 0, 3);
    print_r($My_fav);
    ?>
</body>
</html>