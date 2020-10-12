<?php
    session_start(); //Start the session 

    include 'server/databaseClass.php';
    $database = new databaseClass();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoestore</title>
    <link rel="icon" type="image/png" href="assets/images/favicon.png">

    <!-- Import fontawesome libraries to get access to its css fonts -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Import bootstrap CSS dependency -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Import custom CSS -->
    <link rel="stylesheet" href="assets/styles/main.css">
</head>

<body>

    <!-- Navigation bar -->
    <?php include 'includes/navigation-bar.php';?>

    <!-- Hero / header section -->
    <header>
        <div class="container header__container">
            <img class="header__image" src="assets/images/hero-img.jpg" alt="">
            <span class="header__content">
                <h1 class="font-bold header__title">
                    Expl<span class="text-primary font-bold">o</span>re N<span class="header__ew">ew </span>
                    <br>
                    Th<span class="font-bold header__i">i</span>ngs
                </h1>
                <h5 class="col-md-6 mt-4 px-0 header__text">
                    Browse our best selling sneakers and pick a choice for every occation.
                </h5>
            </span>
            <div class="header__more">
                <a href="#main" class="btn btn-icon-primary">
                    <i class="fa fa-plus"></i>
                </a>
                <small class="mx-2 header__explore__text">Explore more</small>
            </div>
        </div>

    </header>

    <!-- List of shoes -->
    <main id="main">
        <section class="collection">
            <div class="container">
                <h2 class="collection__title">
                    <span class="font-bold title__line__left">Trending </span> <span
                        class="font-bold text-primary">Collection</span>
                </h2>

                <div class="row mt-4">

                    <!-- display all the shoes from the database here -->
                    <?php
                    
                        // get all available shoes and their information from the database
                        $get_shoes = $database->getRows("SELECT * FROM shoes ORDER BY `name` ASC");
                        
                        // Loop through the data and display them one by one with a foreloop 
                        for ($i=0; $i <count($get_shoes) ; $i++) { 

                            // check if shoe is in cart
                            $style='';
                            if (isset($_SESSION['userId'])) {
                                 $check_cart = $database->getRow("SELECT * FROM cart WHERE shoe_id = ? AND user_id = ?",[$get_shoes[$i]['id'],$_SESSION['userId']]);
                                if ($check_cart) {
                                    $style = 'block';
                                }else{
                                    $style = 'none';
                                }
                            }else{
                                $style = 'none';
                            }
                          
                           echo'
                                <div class="col-md-3 mb-4 d-flex">
                                    <div class="card shoe__card">
                                        <img class="shoe__image" src="assets/images/store/'.$get_shoes[$i]['image'].'" alt="">
                                        <div class="shoe__card__overlay">
                                            <div class="added">
                                                <small class="p-2 text-primary font-bold text-center added__to__cart" style="display:'.$style.';">Added to cart</small>
                                            </div>
                                            <span class="overlay__icons">
                                                <button class="btn btn-icon btn-card-icon" data-shoe-id="'.$get_shoes[$i]['id'].'">
                                                    <img class="cart__icon" width="100%" src="assets/images/icons/shopping-bag.svg"
                                                        alt="">
                                                </button>
                                            </span>
                                            <span class="overlay__info">
                                                <h6 class="overlay__title">'.$get_shoes[$i]['name'].'</h6>
                                                <small class="overlay__text">'.$get_shoes[$i]['category'].'</small>
                                                <h6 class="overlay__price">GHS <span class="shoe__card__item__price">'.$get_shoes[$i]['price'].'</span>
                                                </h6>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                           ';
                        }
                    ?>
                </div>
            </div>
        </section>
    </main>

    <!-- Include the login and register modals -->
    <?php 
        include 'includes/login-modal.php';
        include 'includes/register-modal.php';
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


    <!-- Custom script -->
    <script src="assets/javascripts/index.js"></script>
</body>

</html>