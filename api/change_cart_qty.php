<?php
    session_start();

    include '../server/databaseClass.php';
    $database = new databaseClass();

    $shoe_id = $_POST['shoe_id'];
    $cart_id = $_POST['cart_id'];
    $item_quantity = $_POST['item_quantity'];

    // get the shoe price
    $get_shoe_price = $database->getRow("SELECT price FROM shoes WHERE id = ?",[$shoe_id]);
    
    // update cart quantity
    $update_cart = $database->updateRow("UPDATE cart SET quantity = ? WHERE id = ?",[$item_quantity,$cart_id]);
    // get the updated quantity from the database
    $get_updated_quantity = $database->getRow("SELECT quantity FROM cart WHERE id = ?",[$cart_id]);

    // Multiply the quanity by the price 
    $new_total = number_format($get_updated_quantity['quantity'] * $get_shoe_price['price'], 2, '.', ',');
    $data['new_total'] = $new_total;

    // Now lets's get grand total price
    $get_cart = $database->getRows("SELECT * FROM cart WHERE `user_id` = ?",[$_SESSION['userId']]);
    
    $grand_total = 0;

    if ($get_cart) {
        for ($i=0; $i <count($get_cart) ; $i++) { 
            
            // for total subprice get price of each shoe
            $get_shoe_price = $database->getRow("SELECT * FROM shoes WHERE id =?",[$get_cart[$i]['shoe_id']]);

            // calculate item sub total
            $item_total = $get_cart[$i]['quantity'] * $get_shoe_price['price'];
            $grand_total = $grand_total + $item_total;
        }
    }

    $data['sub_total'] = number_format($grand_total,2,'.',',');
    $data['grand_total'] = number_format($grand_total+20,2,'.',',');
    echo json_encode($data);
?>