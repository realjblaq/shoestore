<?php
    session_start();

    if (isset($_SESSION['userId'])) {
        // If user is logged in send true
        $data['session']=true;
        echo json_encode($data);
    }else{
        // If user is logged out send false
        $data['session']=false;
        echo json_encode($data);
    }
?>