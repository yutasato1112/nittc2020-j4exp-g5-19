<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/stylesheet_pageB.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Luxurious+Roman&display=swap" rel="stylesheet">
</head>
<body>
<?php
    print "<div class=kakunin>";
        print "登録情報確認";
    print "</div>";
    print "<div class=zentai>";
    print "<div class=space>";
    print "</div>";
        $syouhin = $_GET['syouhin'];
        $price = $_GET['kakaku'];
        print "<div class=sentence>";
            print "{$syouhin}を{$price}円で登録しますか<br>";
        print "</div>";
?>
        <form action="./pageB_1.php" method="GET" class="choice">
            <input type="radio" name="userchoice" value="yes"/>はい<br/>
            <input type="radio" name="userchoice" value="no"/>いいえ<br/>
            <input type="submit" value="送信"/>
        </form>
        <div class="space">
        </div>
    </div>
</body>
</html>
<?php
    session_start();
    $_SESSION['syouhin'] = $syouhin;
    $_SESSION['kakaku'] = $price;