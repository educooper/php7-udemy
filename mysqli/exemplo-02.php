<?php

$conn = new mysqli("localhost", "root", "labor2018", "dbphp7");

if ($conn->connect_error){

  echo "Error:" . $conn->connect_error;

}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

while ($row = $result->fetch_array(MYSQLI_ASSOC)){

  var_dump($row);

}

?>
