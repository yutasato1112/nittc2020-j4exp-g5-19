<html>
<body>
    
<?php
    // var_dumpを文字列に変換する関数を作成
function get_str_var_dump($var){
    ob_start(); // バッファリングON
    var_dump($var);
    $bar = ob_get_contents(); // バッファの内容を変数に格納
    ob_end_clean(); // バッファを消去してバッファリングOFF
    return $bar;
}



 // 配列$aをget_str_var_dump()で文字列に変換してからerorr_log()に渡す
 error_log('$a:' . get_str_var_dump($a));


?>
</html>
</body>
