<?php
    include '../server/databaseClass.php';
    $database = new databaseClass();
    
    session_start();
    //collect the item data that was clicked
    $shoe_id = $_POST['shoe_id'];
    $user_id = $_SESSION['userId'];

    // check if shoe is already in cart for user
    $get_shoe = $database->getRow("SELECT * FROM cart WHERE `user_id` = ? AND `shoe_id` = ?",[$user_id,$shoe_id]);

    if ($get_shoe) {
        $data['status']=400;
        $data['message']='Item already added to cart';
        echo json_encode($data);
    }else{
        $add_shoe_to_cart = $database->insertRow("INSERT INTO cart (`user_id`,`shoe_id`) VALUE(?,?)",[$user_id,$shoe_id]);
        if ($add_shoe_to_cart) {
            $data['status']=200;
            $data['message']='Item added to cart';
            echo json_encode($data);
        }else {
            $data['status']=500;
            $data['message']='Could not add item to cart';
            echo json_encode($data);
        }
    }
?>