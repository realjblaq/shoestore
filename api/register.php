<?php

    include '../server/databaseClass.php';
    $database = new databaseClass();

    // collect the register form request
    $firstname = trim($_POST['register__firstname']);
    $lastname = trim($_POST['register__lastname']);
    $email = trim($_POST['register__email']);
    $password = trim($_POST['register__password']);
    $password = md5($password);
    $user_exists = false;

    // check if user exists
    $check_user_existence = $database->getRow("SELECT * FROM users WHERE email=?",[$email]);
    if ($check_user_existence) {
        $user_exists = true;
    }else{
        $user_exists = false;
    }

    // If the user exists login the user
    if ($user_exists) {
        $data['status']=400;
        $data['message']="User already exists";
        echo json_encode($data); //send the results back to the user
    }else{
        $register_user = $database->insertRow("INSERT INTO users (firstname, lastname, email, `password`) VALUE(?,?,?,?)",[$firstname, $lastname,$email,$password]);

        if ($register_user==true) {
            // session_destroy();
            session_start();
           
            $_SESSION['userId'] = $database->lastInsertId; //store the user's id in the session using the $_SESSION variable
            $_SESSION['firstname'] = $firstname; //store the user's id in the session using the $_SESSION variable
            $data['status']=200; //create a success status of 200
            $data['message']="User registered"; //create a success status message
            $data['userId']=$database->lastInsertId; //create a success status message
            $data['firstname']=$firstname; //create a success status message

            echo json_encode($data);
        }
      
    }

?>