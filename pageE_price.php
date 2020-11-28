<html>
<body>
<?php
try {
$dbh = new PDO($dsn, $user, $password);
db_access($dbh);
getMessage() . "\n";
} catch (PDOException $e) {
echo "申し訳ございません。接続失敗: " . $e-
exit();
}
?>
</html>
</body>