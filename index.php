<?php
if ( $_POST['payload'] ) {
  shell_exec('git pull');
  return json_encode("here");
}
?>