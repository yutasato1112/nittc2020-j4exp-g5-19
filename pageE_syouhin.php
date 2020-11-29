<html>
<body>
<?php
require('pageD.php');
try{
    print "<form method=\"post\">\n";
    print "<input type=\"submit\" name=\"statusE_syouhintoD\" value=\"検索ページへ\">\n";
    print "</form>\n";

    $connect = new
    PDO("pgsql:host=ec2-52-206-15-227.compute-1.amazonaws.com;dbname=d90s2fmuo5249c;port=5432;user=jsavftjpgmyakf;password=aa711d82b8c4c7118a5c45c5c6cbfdb66b7a2ff2a3443de400e1532ecc29371b");
    
    $sql = "SELECT * FROM gadget WHERE 商品名 like '%$syouhin_name%' ORDER BY 登録日 DESC";
    $result = $connect->query($sql);
    
    print "<h3>デーベース検索結果</h3>\n"; // 表の開始(HTML タグ)
    print "<table border=1 cellspacing=1 cellpadding=1>\n"; // 表の開始(HTML タグ)  
    print "<tr>";              // 表の見出し行の始まり  
    print "<th>商品名</th>";   // 表の見出し    
    print "<th>価格</th>";  // 表の見出し     
    print "<th>登録日</th>";  // 表の見出し  
    print "</tr>";             // 表の見出し行の終わり

    // データベース検索結果を 1 行ずつ取り出して連想配列へ格納，HTML 表として出力 
    $rs = $result->fetchall(); 
    foreach($rs as $row):    
        print "<tr>";              // 表の明細行の始まり    
        print '<td>'.$row['商品名']."</td>";    
        print '<td>'.$row['価格']."</td>";    
        print '<td>'.$row['登録日']."</td>";   
        print "</tr>\n";             // 表の明細行の終わり
    endforeach; 
    print "</table>\n";             // 表の終わり 

} catch (PDOException $e) {
    echo "接続失敗: " . $e-
    var_dump($e);
exit();
}
?>
</html>
<body>
<?php
    if(isset($_POST["statusC"]) ){
        header('Location:pageA.php');
    }