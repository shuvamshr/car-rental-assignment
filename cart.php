<div class="container">
    <div class='row cart_container'>

    </div>
    <?php
    if (!isset($_SESSION['hertz_session'])) {
        echo "<div class='cart_heading'> Cart is empty! </div>";
    }
    ?>
</div>