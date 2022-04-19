<!DOCTYPE html>
<html lang = "ja">
<html>
<head>
<link rel="stylesheet" href="css/stylesheet_pageD.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Luxurious+Roman&display=swap" rel="stylesheet">
</head>
<body>
<?php
error_reporting(0);
session_start();
    print "<div class =kensaku_jouken>";
        print "検索条件<br>\n";
    print "</div>";
    print "<div class=zentai>";
        print "<div class=space>";
        print "</div>";
        print"<div class=syohin_kensaku>";
            print "商品名検索：";
            print "<form method=\"post\">";
                print "<input type=\"text\" size=\"30\" name=\"kensakumei\">";
                print "<input type=\"submit\" name=\"statusD_syouhin\" value=\"送信\">";
            print "</form>";
        print"</div>";

        print "<div class=space>";
        print "</div>";
        print "<div class=kakaku_kensaku>";
        print "価格検索";
        print '<form action="pageE_price.php" method="get">';
            print "最低価格：";
            print '<input type="number"     name="low_price" value="" size="20" maxlength="20"><br>';
            print "最高価格：";
            print '<input type="number"     name="high_price" value="" size="20" maxlength="20"><br>';
            print ' <input type="submit">';
        print '</form>' ;
        print "</div>";
        print "<div class=space>";
        print "</div>";
        print "<div class=sousin>";
            print "<form method=\"post\">\n";
                print "<input type=\"submit\" name=\"statusDtoA\" value=\"商品登録ページへ\">\n";
            print "</form>\n";
        print "</div>";
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
?>
