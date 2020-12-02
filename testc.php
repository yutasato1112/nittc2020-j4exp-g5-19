<!DOCTYPE html>
<html>
<body>
<?php
    $choice = $_GET['userchoice'];
    if($choice == "yes"){
        session_start();
        $syouhinmei = $_SESSION['syouhin'];
        $price = $_SESSION['kakaku'];
        echo "$choice";
        echo "$syouhinmei";
        echo "$price";
    }else{
        header('Location:pageA.php');
    }
?>
</body>
</html>
    