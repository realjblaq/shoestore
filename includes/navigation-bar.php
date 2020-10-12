<?php
    $firstname = ''; // Initialize firstname variable
    $loggedin = false;
    $cart_active = '';
    if (isset($_SESSION['userId'])) {
        $loggedin=true;
        $firstname = $_SESSION['firstname']; // pass the user firstname fromt he database to the firstname variable
    }

   if ($loggedin ==true) {
       // Check if Cart is empty
        $check_cart = $database->getRows("SELECT * FROM cart WHERE `user_id` = ?",[$_SESSION['userId']]);
        if ($check_cart) {
            $cart_active = 'active';
        }
   }

?>
<nav class="">
    <div class="container nav__container">
        <a class="navbar-brand" href="./">
            <h1 class="logo__text">
                <span class="font-black h1 logo__text">Shoe</span><span
                    class="text-primary font-black h1 logo__text">store</span>
            </h1>
        </a>
        <?php
            if ($loggedin==true) {
                echo 
                    '<small class="nav__username dropdown-toggle" data-toggle="dropdown" >
                        Hi, <span>'.$firstname.'</span>
                    </small>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="./api/logout.php">Logout</a>
                    </div>
                    <span class="nav__cart '.$cart_active.'">
                        <a href="./cart.php" class="btn btn-icon">
                            <img class="cart__icon" src="assets/images/icons/shopping-bag.svg" alt="">
                        </a>
                    </span>';
            }else{
                echo '
                    <div class="btn-group ml-auto" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login__modal">Login</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#register__modal">Register</button>
                    </div>
                ';
            }
        ?>
    </div>
</nav>