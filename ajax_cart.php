<?php

session_start();

if (isset($_POST['action'])) {


    if ($_POST['action'] == "delete") {

        foreach ($_SESSION['hertz_session'] as $key => $value) {

            if ($value['vehicle_id'] == $_POST['vehicle_id']) {
                unset($_SESSION['hertz_session'][$key]);
            }
        }
    }

    if ($_POST['action'] == "add") {


        if (isset($_SESSION['hertz_session'])) {

            $in_cart = 0;

            foreach ($_SESSION['hertz_session'] as $key => $value) {

                if ($_SESSION['hertz_session'][$key]['vehicle_id'] == $_POST['vehicle_id']) {
                    $in_cart++;

                    $_SESSION['hertz_session'][$key]['rental_days'] = $_SESSION['hertz_session'][$key]['rental_days'] + $_POST['rental_days'];
                }
            }

            if ($in_cart == 0) {
                $item_array = array(
                    'vehicle_id'  => $_POST['vehicle_id'],
                    'vehicle_image'  => $_POST['vehicle_image'],
                    'vehicle_detail' => $_POST['vehicle_detail'],
                    'rental_price' => $_POST['rental_price'],
                    'rental_days' => $_POST['rental_days']
                );

                $_SESSION['hertz_session'][] = $item_array;
            }
        } else {

            $item_array = array(
                'vehicle_id'  => $_POST['vehicle_id'],
                'vehicle_image'  => $_POST['vehicle_image'],
                'vehicle_detail' => $_POST['vehicle_detail'],
                'rental_price' => $_POST['rental_price'],
                'rental_days' => $_POST['rental_days']
            );

            $_SESSION['hertz_session'][] = $item_array;
        }
    }

    if ($_POST['action'] == "update") {


        if (isset($_SESSION['hertz_session'])) {

            $is_available = 0;

            foreach ($_SESSION['hertz_session'] as $key => $value) {

                if ($_SESSION['hertz_session'][$key]['vehicle_id'] == $_POST['vehicle_id']) {
                    $is_available++;

                    $_SESSION['hertz_session'][$key]['rental_days'] = $_SESSION['hertz_session'][$key]['rental_days'] + $_POST['rental_days'];
                }
            }

            if ($is_available == 0) {
                $item_array = array(
                    'vehicle_id'  => $_POST['vehicle_id'],
                    'vehicle_image'  => $_POST['vehicle_image'],
                    'vehicle_detail' => $_POST['vehicle_detail'],
                    'rental_price' => $_POST['rental_price'],
                    'rental_days' => $_POST['rental_days']
                );

                $_SESSION['hertz_session'][] = $item_array;
            }
        } else {

            $item_array = array(
                'vehicle_id'  => $_POST['vehicle_id'],
                'vehicle_image'  => $_POST['vehicle_image'],
                'vehicle_detail' => $_POST['vehicle_detail'],
                'rental_price' => $_POST['rental_price'],
                'rental_days' => $_POST['rental_days']
            );

            $_SESSION['hertz_session'][] = $item_array;
        }
    }
}
