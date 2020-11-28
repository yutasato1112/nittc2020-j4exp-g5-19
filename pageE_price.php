<html>
<body>
<?php
try {
    $dsn = d90s2fmuo5249c;
    $user = aa711d82b8c4c7118a5c45c5c6cbfdb66b7a2ff2a3443de400e1532ecc29371b;
    $password = jsavftjpgmyakf;
    $dbh = new PDO($dsn, $user, $password);
    db_access($dbh);
    echo "接続成功: ";
    getMessage() . "\n";
    } catch (PDOException $e) {
    echo "申し訳ございません。接続失敗: " . $e-
    exit();
    }
?>
</html>
</body>