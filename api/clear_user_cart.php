<?php
    session_start();
    
    include '../server/databaseClass.php';
    $database = new databaseClass();

    // clear users's cart
    $clear_cart = $database->deleteRow("DELETE FROM cart WHERE `user_id` = ?",[$_SESSION['userId']]);
    if ($clear_cart) {
        echo 200;
    }

?>