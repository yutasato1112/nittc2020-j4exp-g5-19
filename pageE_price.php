<html>
<body>
<?php
    $server      = "ec2-52-206-15-227.compute-1.amazonaws.com";
    $darabase    = "d90s2fmuo5249c";
    $port_number = "5432";
    $user_id     = "jsavftjpgmyakf";
    $user_pass   = "aa711d82b8c4c7118a5c45c5c6cbfdb66b7a2ff2a3443de400e1532ecc29371b";

    $connect = new 
    PDO("pgsql:host = $server;
        dbname     = $darabase;
        port       = $port_number;
        user       = $user_id;
        password   = $user_pass");
    $sql_text = "select * from prod "; 
    
    $result = $connect->query($sql_text); 
    print "<h3>検索結果</h3>\n";
    print "件数は".$result->rowCount()."件です";
    print "<table border=1 cellspacing=1 cellpadding=1>\n";
      print "<tr>"; 
      print "<th>商品名</th>"; 
      print "<th>価格</th>"; 
      print "<th>登録日</th>"; 
      print "</tr>"; 
      $rs = $result->fetchall();
      foreach($rs as $row):
        print "<tr>"; 
        print '<td>'.$row['商品名']."</td>";
        print '<td>'.$row['価格']."</td>";
        print '<td>'.$row['登録日']."</td>";
        print "</tr>\n"; 
      endforeach;
      print "</table>\n";
?>
</html>
</body>


