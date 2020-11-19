<?php
    if (isset($_POST['username']) == true) {
        $yourname = htmlspecialchars($_POST['username'], ENT_QUOTES);
        $firsttime = false;
    } else {
        $firsttime = true;
    }
?>

<html>
<body>

<?php
    if ($firsttime == true) {
        print "あなたのお名前は？<br>\n";
        print "<form method=\"post\">\n";
        print "<input type=\"text\" size=\"30\" name=\"username\"><br>\n";
        print "<input type=\"submit\" name=\"status\" value=\"送信\">\n";
        print "</form>\n";

    } else {
        print $yourname . "　さん，こんにちは<br><br>";
        print "もう一度試しますか？<br>\n";
        print "<form method=\"post\">\n";
        print "<input type=\"submit\" name=\"status\" value=\"もう一度\">\n";
        print "</form>\n";
    }
?>

</body>
</html>