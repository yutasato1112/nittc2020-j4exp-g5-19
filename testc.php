<!DOCTYPE html>
<html>
<body>
<?php
    $choice = $_GET['userchoice'];
    session_start();
    $syouhinmei = $_SESSION['syouhin'];
    $price = $_SESSION['kakaku'];
    echo "$choice";
    echo "$syouhinmei";
    echo "$price";
?>
</body>
</html>
    