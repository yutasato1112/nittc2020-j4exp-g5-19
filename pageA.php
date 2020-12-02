<html>
<body>
<?php
    print "<h3>商品登録ページ</h3><br>\n";
    print '<form action="testb.php" method="get">';
    print "商品名を入力<br>";
    print '<input type="text"     name="syouhin" value="" size="20" maxlength="20"><br>';
    print "価格を入力<br>";
    print '<input type="number"     name="kakaku" value="" size="20" maxlength="20"><br>';
    print '<input type="submit" />';
    print '</form>' ;

    print '<form action="testD.php" method="get">';
    print '<input type="submit" />';
    print "</form>\n";
?>
</html>
</body>
<?php
    if( isset($_POST["statusAtoD"]) ){
        header('Location:testa.php');
    }