<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/stylesheet_pageB_1.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Luxurious+Roman&display=swap" rel="stylesheet">
</head>
<body>
    <div class="sinki">
        新規登録情報
    </div>
    <div class="zentai">
    <div class="space">
    </div>
<?php
    $choice = $_GET['userchoice'];
    if($choice == "yes"){
        session_start();
        $syouhinmei = $_SESSION['syouhin'];
        $price = $_SESSION['kakaku'];
        $timestamp = time();
        $date = date("Y-m-d", $timestamp);
        try{
            $connect = new
            PDO("pgsql:host=ec2-52-206-15-227.compute-1.amazonaws.com;dbname=d90s2fmuo5249c;port=5432;user=jsavftjpgmyakf;password=aa711d82b8c4c7118a5c45c5c6cbfdb66b7a2ff2a3443de400e1532ecc29371b");
            $sql_text = "INSERT INTO gadget VALUES ('$syouhinmei', $price, '$date')"; 
            $result = $connect->query($sql_text); 
            print "<div class=info>";
                echo "登録した商品：";
                echo "$syouhinmei<br>";
                echo "登録した価格：";
                echo "$price<br>";
                echo "登録年月日：";
                echo "$date<br>";
            print "</div>";
        }catch(PDOException $e){
            echo '予期しないエラーが発生しました。';
            echo $e->getMessage();
          }
    
    }else{
        header('Location:pageA.php');
    }
?>
    <form action="pageA.php" method="post" class="sousin">
        <input type="submit" value="OK">
    </form>
    <div class="space">
    </div>
    </div>
</body>
</html>
    