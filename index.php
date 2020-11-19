<?php
    if (isset($_POST['syouhinmei']) == true) {
        $syouhin = htmlspecialchars($_POST['syouhinmei'], ENT_QUOTES);
        $firsttime = false;
    } else {
        $firsttime = true;
    }
?>

<html>
<body>

<?php
    if ($firsttime == true) {
        print "商品名を入力<br>\n";
        print "<form method=\"post\">\n";
        print "<input type=\"text\" size=\"30\" name=\"syouhinmei\"><br>\n";
        print "<input type=\"submit\" name=\"status\" value=\"送信\">\n";
        print "</form>\n";

    } else {
        print $syouhin . "<br><br>";
        print "もう一度試しますか？<br>\n";
        print "<form method=\"post\">\n";
        print "<input type=\"submit\" name=\"status\" value=\"もう一度\">\n";
        print "</form>\n";
    }
?>

</body>
</html>