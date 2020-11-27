<?php
    if(isset($_POST['syouhinmei']) == true){
      $syouhin = htmlspecialchars($_POST['syouhinmei'], ENT_QUOTES);
      $kakaku = htmlspecialchars($_POST['price'], ENT_QUOTES);
      pageC();
      pageB_check();
    }else{
      pageA();
      if($_GET['statusA'] == "送信"){
        pageA_check();
      }
    }

    function pageA_check(){
      $check_text = $_GET['syouhinmei'];
      $check_num = $_GET['price'];
      if($check_num < 0){
        pageC();
      }
    }

    function pageB_check(){
        $YesorNo = $_GET['userchoice'];
        if($YesorNo == "はい"){

        }else{

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
        print "<input type=\"submit\" name=\"statusA\" value=\"送信\">\n";
        print "</form>\n";
    }

    function pageB(){
        print $syouhin . "<br>";
        print $kakaku . "<br><br>";
        print "登録しますか？<br>\n";
        print "<form method=\"post\">\n";
        print "<input type=\"radio\" name=\"userchoice\" value=\"はい\">はい<br>\n";
        print "<input type=\"radio\" name=\"userchoice\" value=\"いいえ\">いいえ<br>\n";
        print "<input type=\"submit\" name=\"statusB\" value=\"送信\">\n";
        print "</form>\n";
    }

    function pageC(){
        print "error<br>\n";
        print "<form method=\"post\">\n";
        print "<input type=\"submit\" name=\"statusC\" value=\"送信\">\n";
        print "</form>\n";
    }

    function pageD(){

    }

    function pageE(){

    }
?>

</body>
</html>