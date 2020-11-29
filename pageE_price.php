<html>
<body>
<?php
    $dsn ='pgsql:host=ec2-52-206-15-227.compute-1.amazonaws.com;dbname=d90s2fmuo5249c;port=5432';
    $user = 'jsavftjpgmyakf';
    $password = 'aa711d82b8c4c7118a5c45c5c6cbfdb66b7a2ff2a3443de400e1532ecc29371b';
    try {
        $dbh = new PDO($dsn, $user, $password);
        echo "接続成功";
        $result = $dbh->query("SELECT * FROM order");
        $rs = $result->fetchall(); 
        error_log('$rs:' . get_str_var_dump($rs));
        

    } catch (PDOException $e) {
        echo "接続失敗: " . $e-
    exit();
    }


    function get_str_var_dump($var){
        ob_start(); // バッファリングON
        var_dump($var);
        $bar = ob_get_contents(); // バッファの内容を変数に格納
        ob_end_clean(); // バッファを消去してバッファリングOFF
        return $bar;
    }
?>
</html>
</body>