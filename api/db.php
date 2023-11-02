
<?php
    $servername='localhost';
    $db_name = 'shopping2';
    $username='root';
    $password='';

    header('Content-Type: application/json');
    date_default_timezone_set("Asia/Bangkok");

    try {
        $db = new PDO("mysql:host=${servername}; dbname=${db_name}", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "database is connected";
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
?>