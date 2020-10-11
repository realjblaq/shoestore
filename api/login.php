<?php

    include '../server/databaseClass.php';
    $database = new databaseClass();

    // collect the login form request
    // $firstname = trim($_POST['firstname']);
    // $lastname = trim($_POST['lastname']);
    $email = trim($_POST['login__email']);
    $password = trim($_POST['login__password']);
    $password = md5($password);
    $user_exists = false;

    // check if user exists
    $check_user_existence = $database->getRow("SELECT * FROM users WHERE email=? AND `password` = ?",[$email,$password]);
    if ($check_user_existence) {
        $user_exists = true;
    }else{
        $user_exists = false;
    }

    // If the user exists login the user
    if ($user_exists) {
        session_start(); //start a session
        $_SESSION['userId'] = $check_user_existence['id']; //store the user's id in the session using the $_SESSION variable
        $_SESSION['firstname'] = $check_user_existence['firstname']; //store the user's id in the session using the $_SESSION variable
        $data['status']=200; //create a success status of 200
        $data['message']="User found"; //create a success status message
        $data['userId']=$check_user_existence['id']; //create a success status message
        $data['firstname']=$check_user_existence['firstname']; //create a success status message
        echo json_encode($data); //send the results back to the user
    }else{
        $data['status']=400;
        $data['message']="User not found";
        echo json_encode($data);
    }

?>