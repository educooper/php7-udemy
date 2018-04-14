<?php

require_once("config.php");

echo session_save_path();
echo "<br/>;"
var_dump(session_status());

switch (session_status()) {
  case 'PHP_SESSION_DISABLED':
      echo "as sessões estiverem desabilitadas"
      break;
    case 'PHP_SESSION_NONE':
      echo "As sessões não estão em habilitadas"
      break;
    case 'PHP_SESSION_ACTIVE':
      echo "as sessões hsabilitadas"
      break;

}

 ?>
