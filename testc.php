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
    <p>登録完了</p> 
    <form action="pageA.php" method="post">
    <input type="submit" value="送信する">
    </form>
</body>
</html>
    