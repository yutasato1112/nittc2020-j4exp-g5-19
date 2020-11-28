<html>
<body>
<?php
    $connect = new PDO("pgsql:host=ec2-52-206-15-227.compute-1.amazonaws.com;dbname=order;port=5432;user=jsavftjpgmyakf;password=aa711d82b8c4c7118a5c45c5c6cbfdb66b7a2ff2a3443de400e1532ecc29371b");
    
    $result = $connect->query("SELECT * FROM order");
    foreach($results as $row) {
        ?><?=row["item"]?> : <?=row["price"]?><br>
        <?php
    }
?>
</html>
</body>
