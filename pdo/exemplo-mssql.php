<?php
    $serverName = "localhost";
    $connectionOptions = array(
        "Database" => "dbphp7",
        "Uid" => "sa",
        "PWD" => "Labor2018"
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    if($conn)
        echo "Connected!"

?>
