<html>
<body>
<?php
    print $syouhin . "<br>";
    print $kakaku . "<br><br>";
    print "登録しますか？<br>\n";
    print "<form method=\"post\">\n";
    print "<input type=\"radio\" name=\"userchoice\" value=\"yes\">はい<br>\n";
    print "<input type=\"radio\" name=\"userchoice\" value=\"no\">いいえ<br>\n";
    print "<input type=\"submit\" name=\"statusB\" value=\"送信\">\n";
    print "</form>\n";
?>
</html>
</body>
<?php
    $server        = "server01"; // データベースシステムがあるサーバの名称
    $database      = "d90s2fmuo5249c";     // 接続するデータベースの名称
    $port_number   = 5432;       // PostgreSQL のポート番号。標準では 5432
    $user_id       = "ec2-52-206-15-227.compute-1.amazonaws.com";   // ユーザの名称
    $user_password = "aa711d82b8c4c7118a5c45c5c6cbfdb66b7a2ff2a3443de400e1532ecc29371b";   // ユーザのパスワード 

    if(isset($_POST["statusB"])){
        if($_POST['youserchoice'] == "yes"){
            
            header('Location:pageA.php');
        }else{
            header('Location:pageA.php');
       }
    }
?> 