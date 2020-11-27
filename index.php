<?php
    if(isset($_POST['syouhinmei']) == true){
      $syouhin = htmlspecialchars($_POST['syouhinmei'], ENT_QUOTES);
      $kakaku = htmlspecialchars($_POST['price'], ENT_QUOTES);
      $firsttime = 0;
    }else{
      $firsttime = 1;
    }
?>

<html>
<body>

<?php
    if ($firsttime == 1) {
        print "商品名を入力<br>\n";
        print "<form method=\"post\">\n";
        print "<input type=\"text\" size=\"30\" name=\"syouhinmei\"><br>\n";
        print "価格を入力<br>\n";
        print "<form method=\"post\">\n";
        print "<input type=\"text\" size=\"30\" name=\"price\"><br>\n";
        print "<input type=\"submit\" name=\"status\" value=\"送信\">\n";
        print "</form>\n";

    }else{
        print $syouhin . "<br>";
        print $kakaku . "<br><br>";
        print "登録しますか？<br>\n";
        print "<form method=\"post\">\n";
        print "<input type=\"radio\" name=\"userchoice\" value=\"はい\">はい<br>\n";
        print "<input type=\"radio\" name=\"userchoice\" value=\"いいえ\">いいえ<br>\n";
        print "<input type=\"submit\" name=\"status\" value=\"送信\">\n";
        print "</form>\n";
    }
?>

</body>
</html>