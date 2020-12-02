<!DOCTYPE html>
<html>
<body>
<?php
    $syouhin = $_GET['syouhin'];
    $price = $_GET['kakaku'];
    echo "$syouhin";
    echo "$price";

    print "{$syouhin}を{$price}円で登録しますか<br>";
?>
    <form action="./testc.php" method="GET">
    <input type="radio" name="userchoice" value="yes"/>はい<br/>
    <input type="radio" name="userchoice" value="no"/>いいえ<br/>
    <input type="submit" value="送信"/>
    </form>
</body>
</html>
