<?php

$conn = new  PDO("sqlsrv:Database=dbphp7;server=127.0.0.1;ConnectionPooling=0","sa", "Labor2018");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results);

?>
