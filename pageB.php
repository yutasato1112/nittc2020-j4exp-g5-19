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
            
            header('Location:pageA.php');
        }else{
            header('Location:pageA.php');
       }
    }
?> 