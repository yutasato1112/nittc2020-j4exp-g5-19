<html>
<head><title>PHP TEST</title></head>
<body>

<?php

function convert_enc($str){
    $from_enc = 'UTF-8';
    $to_enc = 'SJIS';

    return mb_convert_encoding($str, $to_enc, $from_enc);
}

$dsn = 'pgsql:dbname=order host=ec2-52-206-15-227.compute-1.amazonaws.com
port=5432';
$user = 'jsavftjpgmyakf';
$password = 'aa711d82b8c4c7118a5c45c5c6cbfdb66b7a2ff2a3443de400e1532ecc29371b';

try{
    $dbh = new PDO($dsn, $user, $password);

    print('接続に成功しました。<br>');

    $sql = 'select * from shouhin';
    foreach ($dbh->query($sql) as $row) {
        print(convert_enc($row['id']));
        print(convert_enc($row['name']).'<br>');
    }
}catch (PDOException $e){
    print('Error:'.$e->getMessage());
    die();
}


$dbh = null;

?>

</body>
</html>