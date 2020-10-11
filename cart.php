<?php
    session_start(); //Start the session 

    if (!isset($_SESSION['userId'])) {
        header('location:./'); //If user is not logged in send user back to homepage
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart | Shoestore</title>
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

    <div id="cart" class="cart">
        <div class="container cart__container">
            <div class="row cart__row">
                <div class="col-md-7">

                    <h3>
                        Cart
                    </h3>

                    <ul class="list-unstyled cart__list">

                        <li class="cart__list__item">
                            <div class="card cart__card">
                                <div class="row">
                                    <div class="col-md-4 cart__card__left">
                                        <img class="cart__image" src="assets/images/store/air-max-90.jpg" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h6 class="font-bold">
                                                Product Name Here
                                            </h6>
                                            <div class="d-flex justify-content-between mb-2">
                                                <span class="text-muted">Shoe</span>
                                                <span class="cart__item__price">GHS200.00</span>
                                            </div>


                                            <div class="d-flex flex-row align-items-center my-3">
                                                <label class="mr-2 text-muted" for="">Qty:</label>
                                                <select name="" class="form-control flex-grow-1 mr-auto" id="">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">7</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                </select>
                                            </div>

                                            <div class="d-flex justify-content-between">
                                                <span class="text-muted">Total</span>
                                                <span class="cart__item__total">GHS400.00</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="cart__list__item">
                            <div class="card cart__card">
                                <div class="row">
                                    <div class="col-md-4 cart__card__left">
                                        <img class="cart__image" src="assets/images/store/air-max-90.jpg" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h6 class="font-bold">
                                                Product Name Here
                                            </h6>
                                            <div class="d-flex justify-content-between mb-2">
                                                <span class="text-muted">Shoe</span>
                                                <span class="cart__item__price">GHS200.00</span>
                                            </div>


                                            <div class="d-flex flex-row align-items-center my-3">
                                                <label class="mr-2 text-muted" for="">Qty:</label>
                                                <select name="" class="form-control flex-grow-1 mr-auto" id="">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">7</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                </select>
                                            </div>

                                            <div class="d-flex justify-content-between">
                                                <span class="text-muted">Total</span>
                                                <span class="cart__item__total">GHS400.00</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="cart__list__item">
                            <div class="card cart__card">
                                <div class="row">
                                    <div class="col-md-4 cart__card__left">
                                        <img class="cart__image" src="assets/images/store/air-max-90.jpg" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h6 class="font-bold">
                                                Product Name Here
                                            </h6>
                                            <div class="d-flex justify-content-between mb-2">
                                                <span class="text-muted">Shoe</span>
                                                <span class="cart__item__price">GHS200.00</span>
                                            </div>


                                            <div class="d-flex flex-row align-items-center my-3">
                                                <label class="mr-2 text-muted" for="">Qty:</label>
                                                <select name="" class="form-control flex-grow-1 mr-auto" id="">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">7</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                </select>
                                            </div>

                                            <div class="d-flex justify-content-between">
                                                <span class="text-muted">Total</span>
                                                <span class="cart__item__total">GHS400.00</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>
                <div class="col-md-4 cart__right">
                    <h3 class="mb-3">
                        Summary
                    </h3>
                    <div class="card checkout border-0 shadow-sm">
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <span class="text-muted">Subtotal</span>
                                        <span class="cart__item__total">GHS1,400.00</span>
                                    </div>
                                </li>
                                <li class="my-4">
                                    <div class="d-flex justify-content-between">
                                        <span class="text-muted">Delivery cost</span>
                                        <span class="cart__item__total">GHS20.00</span>
                                    </div>
                                </li>
                                <li class="border-top border-bottom py-3">
                                    <div class="d-flex justify-content-between">
                                        <span class="">Total</span>
                                        <span class="cart__item__total font-bold">GHS1,420.00</span>
                                    </div>
                                </li>
                            </ul>

                            <button class="btn btn-primary btn-lg btn-block">Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include the login and register modals -->
    <?php 
        include 'includes/login-modal.php';
        include 'includes/register-modal.php';
    ?>


    <!-- Import bootstrap Javascript libraries -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script> -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>

    <!-- Custom script -->
    <script src="assets/javascripts/index.js"></script>
</body>

</html>