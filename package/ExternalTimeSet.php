<?php
    include_once 'Websend.php';
    
    $ws = new Websend("123.456.789.123");
    $ws->password = "websendpassword";
    
    if($ws->connect()){
        $ws->doCommandAsConsole("time set 6000");
        $ws->disconnect();
        echo "Time set.";
    }else{
        echo "Failed to connect.";
    }
?>