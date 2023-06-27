<script>
    $(document).ready(function() {
        $.ajax({
            url: 'vehicles.json',
            dataType: 'json',
            success: function(data) {
                var vehicle_container = $('#vehicle_container');


                $.each(data.vehicles, function(index, vehicle) {


                    var vehicle_card = `
                    
                    <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <form method='post'>
                    <div class="d-flex flex-column vehicle_card_container">
                        <img src="${vehicle.image}" class="vehicle_image" />
                        <div class="vehicle_divider"></div>
                        <div class="">
                            <div class="d-flex align-items-center vehicle_title_container">
                                <div class="vehicle_detail">
                                ${vehicle.brand} ${vehicle.model} ${vehicle.model_year}
                                </div>
                                <div class="vehicle_status">Available</div>
                            </div>
                        </div>
                        <div class="vehicle_description">${vehicle.description}</div>
                        <div class="">
                            <div class="d-flex justify-content-start">
                                <div class="d-flex align-items-center vehicle_attribute_container">
                                    <img src="img/attr_mileage.svg" class="vehicle_attribute_icon" />
                                    <div class="vehicle_attribute">${vehicle.mileage} km</div>
                                </div>
                                <div class="d-flex align-items-center vehicle_attribute_container">
                                    <img src="img/attr_fuel.svg" class="vehicle_attribute_icon" />
                                    <div class="vehicle_attribute">${vehicle.fuel_type}</div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="d-flex justify-content-start">
                                <div class="d-flex align-items-center vehicle_attribute_container">
                                    <img src="img/attr_seat.svg" class="vehicle_attribute_icon" />
                                    <div class="vehicle_attribute">${vehicle.seats} Seater</div>
                                </div>
                                <div class="d-flex align-items-center vehicle_attribute_container">
                                    <img src="img/attr_type.svg" class="vehicle_attribute_icon" />
                                    <div class="vehicle_attribute">${vehicle.category}</div>
                                </div>
                            </div>
                        </div>
                        <div class="vehicle_divider"></div>
                        <div class="">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-baseline">
                                    <div class="vehicle_price">$${vehicle.rental_price}</div>
                                    <div class="vehicle_price_day">&nbsp; / day</div>
                                </div>
                               
                                <input type="hidden" name="vehicle_image" value="${vehicle.image}" id="vehicle_image_${vehicle.id}" />
                                <input type="hidden" name="vehicle_detail" value="${vehicle.brand} ${vehicle.model} ${vehicle.model_year}" id="vehicle_detail_${vehicle.id}" />
                                <input type="hidden" name="rental_price" value="${vehicle.rental_price}" id="rental_price_${vehicle.id}" />
                                <input type="hidden" name="rental_days" value="1" id="rental_days_${vehicle.id}" />
                                <input type="submit" id="${vehicle.id}" class="vehicle_button" value="Add to reservation"> 
                            </div>
                        </div>
                    </div>
                    </form>
                    </div>
                    `;

                    var vehicle_card_unavailable = `
                    <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="d-flex flex-column vehicle_card_container">
                        <img src="${vehicle.image}" class="vehicle_image" />
                        <div class="vehicle_divider"></div>
                        <div class="">
                            <div class="d-flex align-items-center vehicle_title_container">
                                <div class="vehicle_detail">
                                ${vehicle.brand} ${vehicle.model} ${vehicle.model_year}
                                </div>
                                <div class="vehicle_status_unavailable">Unavailable</div>
                            </div>
                        </div>
                        <div class="vehicle_description">${vehicle.description}</div>
                        <div class="">
                            <div class="d-flex justify-content-start">
                                <div class="d-flex align-items-center vehicle_attribute_container">
                                    <img src="img/attr_mileage.svg" class="vehicle_attribute_icon" />
                                    <div class="vehicle_attribute">${vehicle.mileage} km</div>
                                </div>
                                <div class="d-flex align-items-center vehicle_attribute_container">
                                    <img src="img/attr_fuel.svg" class="vehicle_attribute_icon" />
                                    <div class="vehicle_attribute">${vehicle.fuel_type}</div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="d-flex justify-content-start">
                                <div class="d-flex align-items-center vehicle_attribute_container">
                                    <img src="img/attr_seat.svg" class="vehicle_attribute_icon" />
                                    <div class="vehicle_attribute">${vehicle.seats} Seater</div>
                                </div>
                                <div class="d-flex align-items-center vehicle_attribute_container">
                                    <img src="img/attr_type.svg" class="vehicle_attribute_icon" />
                                    <div class="vehicle_attribute">${vehicle.category}</div>
                                </div>
                            </div>
                        </div>
                        <div class="vehicle_divider"></div>
                        <div class="">
                            <div class="d-flex flex-wrap justify-content-between">
                                <div class="d-flex align-items-baseline">
                                    <div class="vehicle_price">$${vehicle.rental_price}</div>
                                    <div class="vehicle_price_day">&nbsp; / day</div>
                                </div>
                                <button class="vehicle_button_disabled" disabled> Add to reservation </button>
                            </div>
                        </div>
                    </div>
                    </div>`;

                    if (vehicle.availibility) {
                        vehicle_container.append(vehicle_card);
                    } else {
                        vehicle_container.append(vehicle_card_unavailable);
                    }


                });
            }
        });
    });
</script>

<div class="container">
    <div class="row" id="vehicle_container">
    </div>
</div>

<script>
    $(document).on("click", ".vehicle_button", function(event) {

        event.preventDefault();
        var id = $(this).attr("id");
        var vehicle_image = $(`#vehicle_image_${id}`).val();
        var vehicle_detail = $(`#vehicle_detail_${id}`).val();
        var rental_price = $(`#rental_price_${id}`).val();
        var rental_days = $(`#rental_days_${id}`).val();
        var action = "add";

        $.ajax({
            method: "POST",
            url: "ajax_cart.php",

            data: {
                vehicle_id: id,
                vehicle_image: vehicle_image,
                vehicle_detail: vehicle_detail,
                rental_price: rental_price,
                rental_days: rental_days,
                action: action
            },
            success: function(data) {
                alert("Vehicle sucessfully added to reservation");
            }
        });

    });
</script>