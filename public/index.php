<?php
    require "../vendor/autoload.php";

    // instantiate samrty template engine
    $smarty  = new Smarty();

    // Route using controller to display views
    $Route = new \App\Libs\Route();
    $Route->dispatcher();
?>