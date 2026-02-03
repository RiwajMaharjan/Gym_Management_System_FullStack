<?php 
    $servername = "localhost";
    $username = "np03cs4a240114";
    $password = "5nEvV7p0AO";
    $database = "np03cs4a240114";

    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        // echo "connected success!";
    } catch (\Throwable $th) {
        echo "Connection failed: " . $th->getMessage();
    }
?>