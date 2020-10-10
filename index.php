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
    <nav class="">
        <div class="container nav__container">
            <h1>
                <span class="font-black h1">Shoe</span><span class="text-primary font-black h1">store</span>
            </h1>
            <span class="cart active">
                <button class="btn btn-icon">
                    <img class="cart__icon" src="assets/images/icons/shopping-bag.svg" alt="">
                </button>
            </span>
        </div>
    </nav>

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

                    <div class="col-md-3 mb-4 d-flex">
                        <div class="card shoe__card">
                            <img class="shoe__image" src="assets/images/store/air-max-90.jpg" alt="">
                            <div class="shoe__card__overlay">
                                <span class="overlay__icons">
                                    <button class="btn btn-icon btn-card-icon">
                                        <img class="cart__icon" width="100%" src="assets/images/icons/shopping-bag.svg"
                                            alt="">
                                    </button>
                                </span>
                                <span class="overlay__info">
                                    <h6 class="overlay__title">NIKE AIR MAX 90</h6>
                                    <small class="overlay__text">Men's shoe</small>
                                    <h6 class="overlay__price">GHS 200.00</h6>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-4 d-flex">
                        <div class="card shoe__card">
                            <img class="shoe__image" src="assets/images/store/air-max-plus-3.jpg" alt="">
                            <div class="shoe__card__overlay">
                                <span class="overlay__icons">
                                    <button class="btn btn-icon btn-card-icon">
                                        <img class="cart__icon" width="100%" src="assets/images/icons/shopping-bag.svg"
                                            alt="">
                                    </button>
                                </span>
                                <span class="overlay__info">
                                    <h6 class="overlay__title">NIKE AIR MAX plus 3</h6>
                                    <small class="overlay__text">Men's shoe</small>
                                    <h6 class="overlay__price">GHS 300.00</h6>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-4 d-flex">
                        <div class="card shoe__card">
                            <img class="shoe__image" src="assets/images/store/sb-zoom-blazer-mid-pro-gt-skate-shoe.jpg"
                                alt="">
                            <div class="shoe__card__overlay">
                                <span class="overlay__icons">
                                    <button class="btn btn-icon btn-card-icon">
                                        <img class="cart__icon" width="100%" src="assets/images/icons/shopping-bag.svg"
                                            alt="">
                                    </button>
                                </span>
                                <span class="overlay__info">
                                    <h6 class="overlay__title">Nike SB Zoom Blazer Mid Pro GT</h6>
                                    <small class="overlay__text">Skate shoe</small>
                                    <h6 class="overlay__price">GHS 500.00</h6>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-4 d-flex">
                        <div class="card shoe__card">
                            <img class="shoe__image" src="assets/images/store/sb-dunk-low-pro-dark-grey.jpg" alt="">
                            <div class="shoe__card__overlay">
                                <span class="overlay__icons">
                                    <button class="btn btn-icon btn-card-icon">
                                        <img class="cart__icon" width="100%" src="assets/images/icons/shopping-bag.svg"
                                            alt="">
                                    </button>
                                </span>
                                <span class="overlay__info">
                                    <h6 class="overlay__title">SB Dunk Low Pro</h6>
                                    <small class="overlay__text">skate shoe</small>
                                    <h6 class="overlay__price">GHS 200.00</h6>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-4 d-flex">
                        <div class="card shoe__card">
                            <img class="shoe__image" src="assets/images/store/air-deschutz-betrue-shoe.jpg" alt="">
                            <div class="shoe__card__overlay">
                                <span class="overlay__icons">
                                    <button class="btn btn-icon btn-card-icon">
                                        <img class="cart__icon" width="100%" src="assets/images/icons/shopping-bag.svg"
                                            alt="">
                                    </button>
                                </span>
                                <span class="overlay__info">
                                    <h6 class="overlay__title">Nike Air Deschutz BETRUE</h6>
                                    <small class="overlay__text">shoe</small>
                                    <h6 class="overlay__price">GHS 150.00</h6>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-4 d-flex">
                        <div class="card shoe__card">
                            <img class="shoe__image" src="assets/images/store/space-hippie-01-shoe.jpg" alt="">
                            <div class="shoe__card__overlay">
                                <span class="overlay__icons">
                                    <button class="btn btn-icon btn-card-icon">
                                        <img class="cart__icon" width="100%" src="assets/images/icons/shopping-bag.svg"
                                            alt="">
                                    </button>
                                </span>
                                <span class="overlay__info">
                                    <h6 class="overlay__title">Nike Space Hippie 01</h6>
                                    <small class="overlay__text">shoe</small>
                                    <h6 class="overlay__price">GHS 250.00</h6>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-4 d-flex">
                        <div class="card shoe__card">
                            <img class="shoe__image" src="assets/images/store/acg-air-nasu-shoe.jpg" alt="">
                            <div class="shoe__card__overlay">
                                <span class="overlay__icons">
                                    <button class="btn btn-icon btn-card-icon">
                                        <img class="cart__icon" width="100%" src="assets/images/icons/shopping-bag.svg"
                                            alt="">
                                    </button>
                                </span>
                                <span class="overlay__info">
                                    <h6 class="overlay__title">Nike ACG Air Nasu</h6>
                                    <small class="overlay__text">shoe</small>
                                    <h6 class="overlay__price">GHS 100.00</h6>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-4 d-flex">
                        <div class="card shoe__card">
                            <img class="shoe__image" src="assets/images/store/air-jordan-v-low-golf-shoe.jpg" alt="">
                            <div class="shoe__card__overlay">
                                <span class="overlay__icons">
                                    <button class="btn btn-icon btn-card-icon">
                                        <img class="cart__icon" width="100%" src="assets/images/icons/shopping-bag.svg"
                                            alt="">
                                    </button>
                                </span>
                                <span class="overlay__info">
                                    <h6 class="overlay__title">Air Jordan V Low</h6>
                                    <small class="overlay__text">Golf Shoe</small>
                                    <h6 class="overlay__price">GHS 600.00</h6>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Include the login modal -->
    <?php include 'includes/login-modal.php';?>


    <!-- Import bootstrap Javascript libraries -->
    <script src="http://code.jquery.com/jquery-3.5.1.min.js"
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