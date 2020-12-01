<form>
    登録しますか?<br>
    <input type="radio" name="YesorNo" value="yes">はい
    <input type="radio" name="YesorNo" value="no">いいえ
    <br>
    <input type="submit" name="sousin">
</form>
<?php
    $sousin = $_GET['sousin'];
    $value = $_GET['YesorNo'];
    if($sousin == "送信"){
        if ($value == "yes") {
            $syouhinmei = $_GET['syouhin'];
            $price = $_GET['kakaku'];

            $timestamp = time();
            $date = date("Y/m/d", $timestamp);
            $connect = new
            PDO("pgsql:host=ec2-52-206-15-227.compute-1.amazonaws.com;dbname=d90s2fmuo5249c;port=5432;user=jsavftjpgmyakf;password=aa711d82b8c4c7118a5c45c5c6cbfdb66b7a2ff2a3443de400e1532ecc29371b"); 
            $sql_add = "INSERT INTO gadget (商品名, 価格, 登録日) VALUES ($syouhinmei, $price, $date)";
            $result = $connect -> quety($sql_add);
            header('Location:pageD.php');

        }elseif ($value == "no"){
            header('Location:pageA.php');
        }else{
            header('Location:pageC.php');
        }
    }
?>