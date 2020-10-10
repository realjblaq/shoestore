<div class="modal fade" id="register__modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="register__modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h1 class="font-bold">Register <span class="text-primary">to join</span></h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- <h1 class="font-bold mb-5">Register <span class="text-primary">to join</span></h1> -->

                <!-- Login form -->
                <form action="">
                    <div class="form-row">
                        <!-- First name input -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="register__firstname">First name</label>
                                <input id="register__firstname" name="register__firstname" type="text"
                                    class="form-control form-control-lg" required>
                            </div>
                        </div>
                        <!-- Last name input -->
                        <div class="col-md-6">
                            <label for="register__lastname">Last name</label>
                            <input id="register__lastname" name="register__lastname" type="text"
                                class="form-control form-control-lg">
                        </div>
                    </div>
                    <!-- Email input -->
                    <div class="form-group">
                        <label for="register__email">Email</label>
                        <input id="register__email" name="register__email" type="email"
                            class="form-control form-control-lg">
                    </div>
                    <!-- Password input -->
                    <div class="form-group">
                        <label for="register__password">Choose your Password</label>
                        <div class="input-group input-group-lg mb-3">
                            <input id="register__password" name="register__password" type="password"
                                class="form-control password__input" aria-label="Password">
                            <div class="input-group-append">
                                <button class="btn password__button__icon password__button" type="button">
                                    <i class="fa fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer px-0 border-0 d-flex justify-content-between">
                        <a href="#">Sign in here.</a>
                        <span>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </span>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>