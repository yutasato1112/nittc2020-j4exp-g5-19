<html>
<body>
<?php
    print $syouhin . "<br>";
    print $kakaku . "<br><br>";
    print "登録しますか？<br>\n";
    print "<form method=\"post\">\n";
    print "<input type=\"radio\" name=\"userchoice\" value=\"はい\">はい<br>\n";
    print "<input type=\"radio\" name=\"userchoice\" value=\"いいえ\">いいえ<br>\n";
    print "<input type=\"submit\" name=\"statusB\" value=\"送信\">\n";
    print "</form>\n";
?>
</html>
</body>