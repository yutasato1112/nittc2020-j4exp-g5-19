<!DOCTYPE html>
<html lang = "ja">
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

    print "価格検索<br>\n";

    print "<form method=\"post\">\n";
    print "<input type=\"number\" size=\"30\" name=\"low_price\"><br>\n";

    print "  〜  ";

    print "<input type=\"number\" size=\"30\" name=\"high_price\"><br>\n";  
    print "</form>";

    print "<form method=\"post\">\n";
    print "<input type=\"submit\" name=\"statusD_price\" value=\"送信\">\n";
    print "</form>";

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

        $high = $_POST["high_price"];
        $low =  htmlspecialchars($_POST['low_price'], ENT_QUOTES);
        $redirect = "pageE_price.php?high_price={$high}&low_price={$low}";
        header("Location:$redirect");
    }
?>