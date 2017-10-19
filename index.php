<?php
if ( $_POST['payload'] ) {
  shell_exec( 'cd var/www/html/deploy-duragos/Webhook/ && git reset --hard HEAD && git pull' );
}
?>bananas