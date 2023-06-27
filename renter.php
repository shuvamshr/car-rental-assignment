<div class="container">
    <div class='row rent_container'>
        <div class='table-responsive'>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>Renter's Name</th>
                        <th scope='col'>Address</th>
                        <th scope='col'>Vehicle</th>
                        <th scope='col'>Payment Type</th>
                        <th scope='col'>Remaining Days</th>
                        <th scope='col'>Bond Amount</th>
                        <th scope='col'>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $renter_query = "SELECT * FROM history";

                    $renter_result = mysqli_query($connect, $renter_query);
                    if (mysqli_num_rows($renter_result) > 0) {
                        while ($row = mysqli_fetch_array($renter_result)) {
                    ?>
                            <tr>
                                <td scope='row'><?= $row['renter_name'] ?></td>
                                <td><?= $row['renter_address'] ?></td>
                                <td><?= $row['renter_vehicle'] ?></td>
                                <td><?= $row['renter_payment'] ?></td>
                                <td><?= $row['renter_days'] ?></td>
                                <td>$<?= $row['renter_bond'] ?></td>
                                <td><?= $row['renter_date'] ?></td>
                            </tr>

                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>