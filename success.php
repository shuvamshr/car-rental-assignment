<?php include 'header.php' ?>

<?php


foreach ($_SESSION['hertz_session'] as $key => $value) {
    $order_query = "INSERT INTO history (renter_name, renter_address, renter_payment, renter_vehicle, renter_days, renter_bond, renter_date)
                        VALUES ('" . $_GET['renter_name'] . "', '" . $_GET['renter_street'] . ", " . $_GET['renter_suburb'] . ", " . $_GET['renter_state'] . "', '" . $_GET['renter_payment'] . "', '" . $value['vehicle_detail'] . "', '" . $value['rental_days'] . "', '300', '" . date('Y-m-d') . "')";

    mysqli_query($connect, $order_query);
}
unset($_SESSION['hertz_session']);
header("Location: uts-hertz.000webhostapp.com/index.php");
exit();


?>