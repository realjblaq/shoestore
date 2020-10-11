<div class="modal fade" id="login__modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="login__modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h1 class="font-bold">Login <span class="text-primary">to buy</span></h1>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Login form -->
                <form id="login__form" class="">
                    <!-- Email input -->
                    <div class="form-group">
                        <label for="login__email">Email</label>
                        <input id="login__email" value="justicemarkwei@gmail.com" name="login__email" type="email"
                            class="form-control form-control-lg" required>
                        <div class="invalid-feedback">
                            Invalid email or password.
                        </div>
                    </div>
                    <!-- Password input -->
                    <div class="form-group">
                        <label for="login__password">Enter your Password</label>
                        <div class="input-group input-group-lg mb-3">
                            <input id="login__password" value="password" name="login__password" type="password"
                                class="form-control password__input" aria-label="Password" required>
                            <div class="input-group-append">
                                <button class="btn password__button__icon password__button" type="button">
                                    <i class="fa fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer px-0 border-0 d-flex justify-content-between">
                        <a href="#!" data-dismiss="modal" data-toggle="modal" data-target="#register__modal">Register
                            here.</a>
                        <span>
                            <button id="login__button" type="submit" class="btn btn-primary">
                                Login
                                <div class="spinner-border text-light ml-2" role="status" style="display: none;">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </button>
                        </span>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>