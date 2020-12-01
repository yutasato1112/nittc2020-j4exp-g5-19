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
    if($sousin == true){
        if ($value == yes) {
            header('Location:pageA.php');
        }else{
            header('Location:pageC.php');
        }
    }
?>