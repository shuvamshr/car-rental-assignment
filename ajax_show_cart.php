<?php

session_start();

$vehicle_total = 0;

$to = 0;

$output = "";

$output .= "
<div class='table-responsive'>
<table class='table'>
    <thead>
        <tr>
            <th scope='col'>Vehicle</th>
            <th scope='col'>Price Per Day</th>
            <th scope='col'>Rental Days</th>
            <th scope='col'>Total Price</th>
            <th scope='col'></th>
        </tr>
    </thead>
    <tbody>
    
";

if (!empty($_SESSION['hertz_session'])) {

    foreach ($_SESSION['hertz_session'] as $key => $value) {

        $output .= "
                    <tr>
                        <td scope='row'><img src='" . $value['vehicle_image'] . "' class='thumbnail_image' /> " . $value['vehicle_detail'] . " </td>
                        <td>$" . $value['rental_price'] . "</td>
                        <td><input type='number' class='rental_input' value='" . $value['rental_days'] . "'></td>
                        <td>$" . number_format($value['rental_days'] * $value['rental_price'], 2) . "</td>
                        <td class='button_data'><button class='update_button'> Update </button> <button id='" . $value['vehicle_id'] . "' class='delete_button'> Remove </button></td>
                    </tr>            
		";

        $vehicle_total = $vehicle_total + ($value['rental_days'] * $value['rental_price']);

        $_SESSION['vehicle_total'] = $vehicle_total;
    }






    $output .= "
                    <tr>
                        <td scope='row'></td>
                        <td></td>
                        <td class='price_title'>Total Price &nbsp;</td>
                        <td>$ " . number_format($vehicle_total, 2) . "</td>
                        <td class='button_data'><button class='checkout_button' data-toggle='modal' data-target='#order-modal' data-dismiss='modal' > Checkout </button> </td>
                    </tr>
                </tbody>
            </table>
        </div>
   
	";
}


$data['out'] = $output;


echo json_encode($data);
