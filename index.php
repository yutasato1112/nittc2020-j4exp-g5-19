<?php
    if(isset($_POST['syouhinmei']) == true){
      $syouhin = htmlspecialchars($_POST['syouhinmei'], ENT_QUOTES);
      $kakaku = htmlspecialchars($_POST['price'], ENT_QUOTES);
      pageB();
    }else{
      pageA();
    }

    function pageA_check(){

    }

    function pageB_check(){
        $YesorNo = $_GET['userchoice'];
        if($YesorNo == "はい"){
          print "はい";
        }else{
          print "いいえ";
        }
    }
?>
<html>
<body>

<?php
    function pageA(){
        print "商品名を入力<br>\n";
        print "<form method=\"post\">\n";
        print "<input type=\"text\" size=\"30\" name=\"syouhinmei\"><br>\n";
        print "価格を入力<br>\n";
        print "<form method=\"post\">\n";
        print "<input type=\"text\" size=\"30\" name=\"price\"><br>\n";
        print "<input type=\"submit\" name=\"status\" value=\"送信\">\n";
        print "</form>\n";

    }

    function pageB(){
        print $syouhin . "<br>";
        print $kakaku . "<br><br>";
        print "登録しますか？<br>\n";
        print "<form method=\"post\">\n";
        print "<input type=\"radio\" name=\"userchoice\" value=\"はい\">はい<br>\n";
        print "<input type=\"radio\" name=\"userchoice\" value=\"いいえ\">いいえ<br>\n";
        print "<input type=\"submit\" name=\"status\" value=\"送信\">\n";
        print "</form>\n";
        function pageB_check();
    }

    function pageC(){
        print "error<br>\n";
        print "<form method=\"post\">\n";
        print "<input type=\"text\" size=\"30\" name=\"price\"><br>\n";
        print "<input type=\"submit\" name=\"status\" value=\"送信\">\n";
        print "</form>\n";
    }

    function pageD(){

    }

    function pageE(){

    }
?>

</body>
</html>