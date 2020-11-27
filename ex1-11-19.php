<?php
    if(isset($_POST['syouhinmei']) == true){
      $syouhin = htmlspecialchars($_POST['syouhinmei'], ENT_QUOTES);
      $kakaku = htmlspecialchars($_POST['price'], ENT_QUOTES);
      pageB();
      pageB_check();
    }else{
      pageA();
      if($_GET['statusA'] == "送信"){
        pageA_check();
      }
    }

    function pageA_check(){
      
    }

    function pageB_check(){
        $YesorNo = $_GET['userchoice'];
        if($YesorNo == "はい"){

        }else{

        }
    }
?>