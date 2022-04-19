<html>
<head>
<link rel="stylesheet" href="css/stylesheet_pageE.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Luxurious+Roman&display=swap" rel="stylesheet">
</head>
<body>
<?php
    print "<div class=syohin_touroku>";
        print "<h3>商品登録ページ</h3>";
    print "</div>";
    print "<div class=zentai>";
        print "<div class=space>";
        print "</div>";
        print "<div class=nyuryoku>";
            print '<form action="pageB.php" method="get">';
            print "商品名を入力：";
            print '<input type="text" name="syouhin" value="" size="20" maxlength="20"><br>';
            print "<div class=small_space>";
            print "</div>";
            print "価格を入力：";
            print '<input type="number" name="kakaku" value="" size="20" maxlength="20"><br>';
            print "<div class=small_space>";
            print "</div>";
            print '<input type="submit" />';
            print '</form>' ;
        print "</div>"
?>
    <div class="sousin">
        <form action="pageD.php" method="post">
            <input type="submit" value="商品検索ページへ"> 
        </form>
    </div>
    <div class="space">
    </div>
</div>
</html>
</body>