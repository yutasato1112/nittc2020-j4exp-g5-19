<html>
<body>
    
<?php
    print "<table border=1 cellspacing=1 cellpadding=1>\n"; // 表の開始(HTML タグ)  
    print "<tr>";              // 表の見出し行の始まり  
    print "<th>商品名</th>";   // 表の見出し 商品名   
    print "<th>価格</th>";  // 表の見出し 価格  
    print "<th>発売日</th>";  // 表の見出し 発売日  
    print "</tr>"; 

    $connect = new PDO("pgsql:host=ec2-52-206-15-227.compute-1.amazonaws.com;dbname=order;port=5432;user=jsavftjpgmyakf;password=aa711d82b8c4c7118a5c45c5c6cbfdb66b7a2ff2a3443de400e1532ecc29371b");
    
    $result = $connect->query("SELECT * FROM order");
    foreach($results as $row) {
        ?><?=row["商品名"]?> : <?=row["価格"]?><br>
        <?php
    }
?>
</html>
</body>
