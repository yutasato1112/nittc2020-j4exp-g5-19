<html>
<body>
<?php
    print "<h3>商品登録ページ</h3><br>\n";
    print '<form action="pageB.php" method="get">';
    print "商品名を入力<br>";
    print '<input type="text"     name="syouhin" value="" size="20" maxlength="20"><br>';
    print "価格を入力<br>";
    print '<input type="number"     name="kakaku" value="" size="20" maxlength="20"><br>';
    print ' <input type="submit" />';
    print '</form>' ;

    print "<form method=\"post\">\n";
    print "<input type=\"submit\" name=\"statusAtoD\" value=\"商品検索ページへ\">\n";
    print "</form>\n";
?>
</html>
</body>
<?php
    if( isset($_POST["statusAtoD"]) ){
        header('Location:testa.php');
    }