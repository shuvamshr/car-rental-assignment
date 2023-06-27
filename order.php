<div class="modal p-3" id="order-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <form action="success.php" method="get" class="was-validated">
                <div class="modal-body">
                    <div id="cart_header_title"> Checkout Information </div>
                    <div class="checkout_container">
                        <label for="fullname" id="input_label">Full Name</label>
                        <input type="text" name="renter_name" class="input_field" id="renter_name" required>
                        <label for="address" id="input_label">Street Address</label>
                        <input type="text" name="renter_street" class="input_field" id="renter_street" required>
                        <label for="suburb" id="input_label">Suburb</label>
                        <input type="text" name="renter_suburb" class="input_field" id="renter_suburb" required>
                        <label for="state" id="input_label">State</label>
                        <input type="text" name="renter_state" class="input_field" id="renter_state" required>
                        <label for="country" id="input_label">Country</label>
                        <input type="text" name="renter_country" class="input_field" id="renter_country" value="Australia" readonly>
                        <label for="number" id="input_label">Phone Number</label>
                        <input type="tel" name="renter_number" class="input_field" id="renter_number" value="+61 " required>
                        <label for="email" id="input_label">Email Address</label>
                        <input type="email" name="renter_email" class="input_field" id="renter_email" required>
                        <label for="payment" id="input_label">Payment Type</label>
                        <select name="renter_payment" class="input_field" id="renter_payment" required>
                            <option value="PayPal">PayPal</option>
                            <option value="Credit Card">Credit Card</option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <button onclick="window.location.href='index.php';" id="continue_button">Continue Shopping</button>
                    <button type="submit" href="index.php" id="book_button">Book Vehicle</button>
                </div>
            </form>
        </div>
    </div>
</div>