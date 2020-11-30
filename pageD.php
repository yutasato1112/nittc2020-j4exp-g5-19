<html>
<body>
<?php
session_start();
    print "検索条件<br>\n";
    print "商品名検索<br>\n";
    print "<form method=\"post\">\n";
    print "<input type=\"text\" size=\"30\" name=\"kensakumei\"><br>\n";
    print "<input type=\"submit\" name=\"statusD_syouhin\" value=\"送信\"><br><br>\n\n";
    print "</form>\n";

    print "価格検索<br?\n";

    print '<form action = "pageE_price.php". method = "get">';
    print '<p><input type= "number" name="low_price" size="30" required>';

    //print "  〜  ";

    print '<input type= "number" name="high_price" size="30" required></p>';
    print '</form>';

    print "<form method=\"post\">\n";
    print "<input type=\"submit\" name=\"statusD_price\" value=\"送信\">\n";
    print '</form>';

    print "<form method=\"post\">\n";
    print "<input type=\"submit\" name=\"statusDtoA\" value=\"商品登録ページへ\">\n";
    print "</form>\n";
?>
</body>
</html>
<?php
    $_SESSION['syouhin_name']= $_POST["kensakumei"];


    if( isset($_POST["statusDtoA"]) ){
        header('Location:pageA.php');
    }
    if( isset($_POST["statusD_syouhin"]) ){
        header('Location:pageE_syouhin.php');
    }
    if( isset($_POST["statusD_price"]) ){
        header('Location:pageE_price.php');
    }
?>