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
?>
</html>
</body>

<?php
    if(isset($_POST["statusA"]) ){
        if($_POST["price"] >= 0){
            header('Location:pageB.php');
        }else{
            header('Location:pageC.php');
        }
    }
?>