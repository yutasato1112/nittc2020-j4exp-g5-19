<html>
<body>
<?php
    print "商品名を入力<br>\n";
    print "<form method=\"post\">\n";
    print "<input type=\"text\" size=\"30\" name=\"syouhinmei\"><br>\n";
    print "価格を入力<br>\n";
    print "<form method=\"post\">\n";
    print "<input type=\"text\" size=\"30\" name=\"price\"><br>\n";
    print "<input type=\"submit\" name=\"statusA\" value=\"送信\">\n";
    print "</form>\n";
?>
</html>
</body>

<?php
    $kakaku = $_POST['price'];
    if(isset($_POST["statusA"]) ){
        if(is_int($kakaku) && $kakaku > 0){
            header('Location:pageB.php');
        }else{
            header('Location:pageC.php');
        }
    }
?>