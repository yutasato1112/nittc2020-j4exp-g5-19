<html>
<body>
<?php
$server        = "server01"; // データベースシステムがあるサーバの名称
$database      = "d90s2fmuo5249c";     // 接続するデータベースの名称
$port_number   = 5432;       // PostgreSQL のポート番号。標準では 5432
$user_id       = "ec2-52-206-15-227.compute-1.amazonaws.com";   // ユーザの名称
$user_password = "aa711d82b8c4c7118a5c45c5c6cbfdb66b7a2ff2a3443de400e1532ecc29371b";   // ユーザのパスワード 
$connect  = new PDO("pgsql:host=$server;dbname=$database;port=$port_number;user=$user_id;password=$user_password"); 
$sql_text = "select company, turnover from table01 where turnover > 100000 order by turnover desc"; 
$result   = $connect->query($sql_text); 
print "<h3>デーベース検索結果</h3>\n"; 

print "<table border=1 cellspacing=1 cellpadding=1>\n"; 
print "<tr>"; 
print "<th>company</th>";   
print "<th>turnover</th>";  
print "</tr>";             
$rs = $result->fetchall(); 
foreach($rs as $row): 
    print "<tr>";              
    print '<td>'.$row['company']."</td>"; 
    print '<td>'.$row['turnover']."</td>"; 
    print "</tr>\n";             
endforeach; 
print "</table>\n";             
?>
</html>
</body>