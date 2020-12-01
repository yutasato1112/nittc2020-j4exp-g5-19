<html>
<body>
<?php
    print "商品名を入力<br>\n";
    print "<form method=\"post\">\n";
    print "<input type=\"text\" size=\"30\" name=\"syouhinmei\"><br>\n";
    print "</form>\n";
    print "価格を入力<br>\n";
    print "<form name = \"price\" method=\"post\">\n";
    print "<input type=\"number\" size=\"30\" name=\"price\"><br>\n";
    print "<input type=\"submit\" name=\"statusA\" value=\"送信\">\n";
    print "</form>\n";

    print "<h1>商品登録ページ</h1><br>\n";
    print '<form action="pageB.php" method="get">';
    print "価格を入力<br>";
    print '<input type="text"     name="syouhin" value="" size="20" maxlength="20"><br>';
    print "価格を入力<br>";
    print '<input type="number"     name="kakaku" value="" size="20" maxlength="20"><br>';
    print ' <input type="submit" />';
    print '</form>' ;
?>
</html>
</body>

<?php
    if(isset($_POST["statusA"]) ){
        if($_POST["price"] >= 0){
            $syouhinmei = $_POST['syouhinmei'];
            $price = $_POST['price'];
            header('Location:pageB.php');
        }else{
            header('Location:pageC.php');
        }
    }
?>