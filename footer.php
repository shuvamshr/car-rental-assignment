<script type="text/javascript">
    $(document).ready(function() {

        view_cart();

        function view_cart() {
            $.ajax({
                url: "ajax_show_cart.php",
                method: "POST",
                dataType: "JSON",
                success: function(data) {
                    $(".cart_container").html(data.out);
                }
            });
        }

        setInterval(view_cart, 1000);

    });

    $(document).on("click", ".delete_button", function() {
        var id = $(this).attr("id");

        var action = "delete";

        $.ajax({
            url: "ajax_cart.php",
            method: "POST",
            data: {
                vehicle_id: id,
                action: action
            },
            dataType: "JSON",
            success: function(data) {

            }
        });
    });
</script>

</body>

</html>