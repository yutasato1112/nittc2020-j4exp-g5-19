<?php
    if (isset($_POST['status']) && ($_POST['status'] == "送信")) {
        if(isset($_POST['userchoice'])) $userchoice = $_POST['userchoice'];
        $firsttime = false;
    } else {
        $firsttime = true;
    }
?>

<html>
<body>

<?php
    if ($firsttime == true) {
        print "商品を選択してください<br><br>\n";
        print "<form  method=\"post\">\n";
        print "<input type=\"radio\" name=\"userchoice\" value=\"商品A\">商品A<br>\n";
        print "<input type=\"radio\" name=\"userchoice\" value=\"商品B\">商品B<br>\n";
        print "<input type=\"radio\" name=\"userchoice\" value=\"商品C\">商品C<br>\n";
        print "<input type=\"radio\" name=\"userchoice\" value=\"商品D\">商品D<br><br>\n";
        print "<input type=\"submit\" name=\"status\" value=\"送信\">\n";
        print "</form>\n";
    } else {
        if (isset($userchoice)) {
            print $userchoice . "　を選びましたね。<br><br>";
        } else {
            print "なにも選ばなかったですね。<br><br>";
        }
        print "もう一度試しますか？<br><br>\n";
        print "<form  method=\"post\">\n";
        print "<input type=\"submit\" name=\"status\" value=\"もう一度\">\n";
        print "</form>\n";
    }
?>

</body>
</html>