<?php
$pessoas = array();

$json = '[{"nome":"Joao","idade":20},{"nome":"Glaucio","idade":23}]';

$data = json_decode($json,true);

var_dump($data);

 ?>
