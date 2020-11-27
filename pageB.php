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
    if(isset($_POST["statusB"])){
        if($_POST['youserchoice'] == "yes"){
            $conn = "host=localhost dbname=uriage user=pguser password=pguser";
            $link = pg_connect($conn);
            if (!$link) {
               die('接続失敗です。'.pg_last_error());
            }

            print('接続に成功しました。<br>');$conn = "host=localhost dbname=uriage user=pguser password=pguser";
            $link = pg_connect($conn);
            if (!$link) {
                die('接続失敗です。'.pg_last_error());
            }

            print('接続に成功しました。<br>');
            header('Location:pageA.php');
        }else{
            header('Location:pageA.php');
       }
    }
?> 