<!DOCTYPE html>
<html>
<body>
<?php
    $choice = $_GET['userchoice'];
    if($choice == "yes"){
        session_start();
        $syouhinmei = $_SESSION['syouhin'];
        $price = $_SESSION['kakaku'];
        $timestamp = time();
        $date = date("Y/m/d", $timestamp);
        try{
            $connect = new
            PDO("pgsql:host=ec2-52-206-15-227.compute-1.amazonaws.com;dbname=d90s2fmuo5249c;port=5432;user=jsavftjpgmyakf;password=aa711d82b8c4c7118a5c45c5c6cbfdb66b7a2ff2a3443de400e1532ecc29371b");
            $sql_text = "INSERT INTO VALUES ('$syouhinmei', $price, '$date')"; 
            $result = $connect->query($sql_text); 
            echo "$syouhinmei<br>";
            echo "$price<br>";
            echo "$date<br>";
        }catch(PDOException $e){
            echo '予期しないエラーが発生しました。';
            echo $e->getMessage();
          }
    
    }else{
        header('Location:pageA.php');
    }
?>
    <p>登録完了</p>
    <form action="pageA.php" method="post">
    <input type="submit" value="OK">
    </form>
</body>
</html>
    