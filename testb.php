<!DOCTYPE html>
<html>
<body>
<?php
    $syouhin = $_GET['syouhin'];
    $price = $_GET['kakaku'];
    echo "$syouhin";
    echo "$price";

    print "登録しますか<br>";
    print '<form action = "testa.php method="get"">';
    print '<input type=\"radio\" name=\"userchoice\" value=\"yes\">はい<br>';
    print '<input type=\"radio\" name=\"userchoice\" value=\"no\">いいえ<br>';
    print '</form>'
?>
</body>
</html>
