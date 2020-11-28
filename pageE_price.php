<html>
<body>
<?php
    $dsn ='pgsql:host=ec2-52-206-15-227.compute-1.amazonaws.com;dbname=d90s2fmuo5249c;port=5432';
    $user = 'jsavftjpgmyakf';
    $password = 'aa711d82b8c4c7118a5c45c5c6cbfdb66b7a2ff2a3443de400e1532ecc29371b';
    try {
        $dbh = new PDO($dsn, $user, $password);
        echo "接続成功";
        $result = $connect->query("SELECT * FROM order");
        $rs = $result->fetchall(); 
        print "$rs[1][1]";

    } catch (PDOException $e) {
        echo "接続失敗: " . $e-
    exit();
    }
?>
</html>
</body>