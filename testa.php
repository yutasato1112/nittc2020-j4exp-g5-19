<form>
    あなたは学生ですか?<br>
    <input type="radio" name="student" value="学生です">はい
    <input type="radio" name="student" value="学生ではありません">いいえ
    <br>
    <input type="submit">
</form>
<?php
    $value = $_GET['student'];
    if ($value) {
        echo "私は". $value;
    }
?>