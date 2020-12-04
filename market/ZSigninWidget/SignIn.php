<?php


use zetsoft\former\ALL\AzimForm;
use zetsoft\former\auth\LoginForm;
use zetsoft\models\user\User;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\iconers\ZAuthIconWidget;



$model = new LoginForm();
$form = $this->activeBegin();
$this->modelSave($model);
$this->title = "Вход в систему";

?>



    <div class="container">
        <div class="row">
            <div class="col-6">

                <div class="card">

                    <h5 class="card-header success-color white-text text-center py-4">
                        <strong>Login</strong>
                    </h5>

                    <!--Card content-->
                    <div class="card-body px-lg-5  mt-5">

                        <!-- Form -->
                        <form class="text-center"  action="#!">
                            <div class="md-form">
                            <!-- Email -->
                            <?php
                            echo ZFormWidget::widget([
                                'model' => $model,
                                'form' => $form,
                                'names' => [
                                    'photo'
                                ],
                                'config'=>[
                                    'topBtn' => false,
                                    'botBtn' => false,
                                ]
                            ]);
                            ?>
                            </div>

                            <div class="d-flex justify-content-around">
                                <div>
                                    <!-- Remember me -->
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
                                        <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
                                    </div>
                                </div>
                                <div>
                                    <!-- Forgot password -->
                                    <a href="">Forgot password?</a>
                                </div>
                            </div>

                            <!-- Sign in button -->
                            <button class="btn btn-outline-success btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>

                            <!-- Register -->
                            <p>Not a member?
                                <a href="">Register</a>
                            </p>

                            <?php
                            echo ZAuthIconWidget::widget();
                            ?>

                        </form>
                        <!-- Form -->

                    </div>

                </div>


            </div>
            <div class="col-6">

            </div>

        </div>
    </div>


