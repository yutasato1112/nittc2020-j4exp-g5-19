<html>
<body>
    
<?php
    print "<table border=1 cellspacing=1 cellpadding=1>\n"; // 表の開始(HTML タグ)  
    print "<tr>";              // 表の見出し行の始まり  
    print "<th>商品名</th>";   // 表の見出し 商品名   
    print "<th>価格</th>";  // 表の見出し 価格  
    print "<th>登録日</th>";  // 表の見出し 登録日  
    print "</tr>"; 

    $dsn ='pgsql:host=ec2-52-206-15-227.compute-1.amazonaws.com;dbname=d90s2fmuo5249c;port=5432';
    $user = 'jsavftjpgmyakf';
    $password = 'aa711d82b8c4c7118a5c45c5c6cbfdb66b7a2ff2a3443de400e1532ecc29371b';
    try {
        $dbh = new PDO($dsn, $user, $password);
        echo "接続成功";
        $result = $dbh->query("SELECT * FROM order");
        //$rs = $result->fetchall(); 
        $rs = [["商品名","価格","登録日"],["a","b","c"],["d","e","f"],["g","h","i"] ];
        foreach($rs as $row):    
            print "<tr>";              // 表の明細行の始まり    
            print '<td>'.$row['商品名']."</td>";    
            print '<td>'.$row['価格']."</td>";  
            print '<td>'.$row['登録日']."</td>";    
            print "</tr>\n";             // 表の明細行の終わり
        endforeach; 
        print "</table>\n";             // 表の終わり 
        
        // データベース検索結果を 1 行ずつ取り出して普通の配列へ格納，HTML 表として出力   
        while(($row = pg_fetch_array($rs))):      
            print "<tr>";              // 表の明細行の始まり       
            print '<td>'.$row[0]."</td>";       
            print '<td>'.$row[1]."</td>";       
            print '<td>'.$row[2]."</td>";      
            print "</tr>\n";             // 表の明細行の終わり
        endwhile; 

    } catch (PDOException $e) {
        echo "接続失敗: " . $e-
    exit();
    }



    
    
?>
</html>
</body>
