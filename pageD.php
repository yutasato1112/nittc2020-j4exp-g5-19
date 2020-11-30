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
    print '<form action = "pageE_price".method="get">';
    print "<input type=\"number\" size=\"30\" name=\"low_price\" value='.$_SESSION[Low_Price].'>";
    print "</form>";
    print "  〜  ";
    print '<form action = "pageE_price".method="get">';
    print "<input type=\"number\" size=\"30\" name=\"high_price\" value='.$_SESSION[High_Price].'><br>\n";
    print "</form>";
    print "<form method=\"post\">";
    print "<input type=\"submit\" name=\"statusD_price\" value=\"送信\"><br><br><br>\n\n\n";
    print "</form>\n";

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