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
?>
    <form action="pageD.php" method="post">
    <input type="submit" value="商品検索ページへ"> 
    </form>
</html>
</body>