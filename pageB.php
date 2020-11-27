<html>
<body>
<?php
    print $syouhin . "<br>";
    print $kakaku . "<br><br>";
    print "登録しますか？<br>\n";
    print "<input type=\"submit\" name=\"yes\" value=\"はい\">";
    print "<input type=\"submit\" name=\"no\" value=\"いいえ\">\n";
    print "</form>\n";
?>
</html>
</body>
<?php
    if(isset($_POST["yes"]) ){
        header('');
    }else{
        header('Location:pageA.php');
    }
?> 