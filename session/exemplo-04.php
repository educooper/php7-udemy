<?php

session_id('astf4rk0dgejjqgmufve8ihi9pkqupj6183uiehfp35la6eu3kl1');

require_once("config.php");
session_regenerate_id();
echo session_id();
var_dump($_SESSION);
 ?>
