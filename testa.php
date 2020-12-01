<form>
    登録しますか?<br>
    <input type="radio" name="YesorNo" value="yes">はい
    <input type="radio" name="YesorNo" value="no">いいえ
    <br>
    <input type="submit">
</form>
<?php
    $value = $_GET['YesorNo'];
    if ($value == yes) {
        header('Location:pageA.php');
    }else{
        header('Location:pageC.php');
    }
?>