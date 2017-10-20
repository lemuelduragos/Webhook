<?php
    $commands = array(
        'echo $PWD',
        'whoami',
        'sudo git pull',
    );
    // Run the commands for output
    foreach($commands AS $command){
        shell_exec("$command 2>&1");
    }
?>