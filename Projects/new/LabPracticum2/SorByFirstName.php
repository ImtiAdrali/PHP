<link rel="stylesheet" href="style.css" type="text/css" />
<div>           <div class='date'>
                <?php
                    echo "Last modified: " . date("H:i F d, Y", getlastmod()) . " EST</div>";
                ?>
                <div>
                <h1>207 Enterprises</h1>
                <h2 style="text-align: center;">Sorted by First Name</h2>
                <h3 style="text-align: center;">Would you like to <a href="index.php?status=0">Logout</a></h3>
                <h2>Registered Users</h2>
                
            </div>
<?php
if(isset($_POST['select'])){
    if(!empty($_POST['Sort'])) {
        $selected = $_POST['Sort'];
        
        
        if ($selected == "firstName") {
            $handle = fopen("file.txt", "r");
            $fileCo = file("file.txt");
            ?>  <ul class="weekdays">
                        <li>First Name</li>
                        <li>Last Name</li>
                        <li>Email Address</li>
                </ul>
            <?php
            sort($fileCo);
            $count = count($fileCo);
            for ($i=0; $i<$count; $i++) {
                $ex = explode(",", $fileCo[$i]);
                ?>
                    <ul class="values">
                            <li><?php echo $ex[0]; ?></li>
                            <li><?php echo $ex[1]; ?></li>
                            <li><?php echo $ex[2]; ?></li>
                        </ul>
                    <?php
            }
            
            ?> <div class="numAccounts">Total Accounts: <?php echo $count;?></div>
            <br />
            <a href="file.txt">Text File</a>
             <?php
            
            
        }
    } else {
        echo 'Please select the value.';
    }
}