<html>
<body>
<?php
    print "error<br>\n";
    print "<form method=\"post\">\n";
    print "<input type=\"submit\" name=\"statusC\" value=\"OK\">\n";
    print "</form>\n";
?>
</html>
</body>
<?php
    if(isset($_POST["statusC"]) ){
        header('Location:pageA.php');
    }
?>