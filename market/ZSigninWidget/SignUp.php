<?php

/**
 *
 *
 * Author:  Shahzod G'ulomqodirov
 *
 */

use zetsoft\widgets\iconers\ZAuthIconWidget;


?>

    <div class="container p-1">
        <div class="row">
            <div class="col-4">
                <!-- Material form register -->
                <div class="card">

                    <h5 class="card-header success-color white-text text-center py-4">
                        <strong>Sign up</strong>
                    </h5>

                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">

                        <!-- Form -->
                        <form class="text-center" style="color: #757575;" action="#!">

                            <div class="form-row">
                                <div class="col">
                                    <!-- First name -->
                                    <div class="md-form">
                                        <input type="text" id="materialRegisterFormFirstName" class="form-control">
                                        <label for="materialRegisterFormFirstName">First name</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- Last name -->
                                    <div class="md-form">
                                        <input type="email" id="materialRegisterFormLastName" class="form-control">
                                        <label for="materialRegisterFormLastName">Last name</label>
                                    </div>
                                </div>
                            </div>

                            <!-- E-mail -->
                            <div class="md-form mt-0">
                                <input type="email" id="materialRegisterFormEmail" class="form-control">
                                <label for="materialRegisterFormEmail">E-mail</label>
                            </div>

                            <!-- Password -->
                            <div class="md-form">
                                <input type="password" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                                <label for="materialRegisterFormPassword">Password</label>
                                <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                                    At least 8 characters and 1 digit
                                </small>
                            </div>

                            <!-- Phone number -->
                            <div class="md-form">
                                <input type="password" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock">
                                <label for="materialRegisterFormPhone">Phone number</label>
                                <small id="materialRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                                    Optional - for two step authentication
                                </small>
                            </div>

                            <!-- Newsletter -->
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="materialRegisterFormNewsletter">
                                <label class="form-check-label" for="materialRegisterFormNewsletter">Subscribe to our newsletter</label>
                            </div>

                            <!-- Sign up button -->
                            <button class="btn btn-outline-success btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>

                            <!-- Social register -->
                            <p>or sign up with:</p>

                            <a type="button" class="btn-floating btn-fb btn-sm">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a type="button" class="btn-floating btn-tw btn-sm">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a type="button" class="btn-floating btn-li btn-sm">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a type="button" class="btn-floating btn-git btn-sm">
                                <i class="fab fa-github"></i>
                            </a>

                            <hr>

                            <!-- Terms of service -->
                            <p>By clicking
                                <em>Sign up</em> you agree to our
                                <a href="" target="_blank">terms of service</a>

                        </form>
                        <!-- Form -->

                    </div>

                </div>
                <!-- Material form register -->
            </div>

        </div>
    </div>


