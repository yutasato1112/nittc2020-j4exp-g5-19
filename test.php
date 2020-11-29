$result = $dbh->query("SELECT * FROM order");
        $rs = $result->fetchall(); 