<div class="container">
    <div class="row navigation_container">
        <div class="col-12 col-lg-6 col-md-6 col-sm-12 my-3">
            <div class="d-flex justify-content-lg-start justify-content-md-start justify-content-center">
                <a href="index.php"><img src="img/logo.svg" class="logo_icon" /></a>

            </div>
        </div>
        <div class="col-12 col-lg-6 col-md-6 col-sm-12 my-3">
            <div class="d-flex justify-content-lg-end justify-content-md-end justify-content-center">
                <button class="history_button" onclick="window.location.href='history.php';"> Renting History </button>
                <button class="cart_button" onclick="window.location.href='reservation.php';"> View Cart (<?php
                                                                                                            if (!isset($_SESSION['hertz_session'])) {
                                                                                                                echo "0";
                                                                                                            } else {
                                                                                                                echo count($_SESSION['hertz_session']);
                                                                                                            } ?>) </button>
            </div>
        </div>
    </div>