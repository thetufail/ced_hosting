$(document).ready(function (e) {

    $('#delete').on('change', function () {
        if ($('#cab_type').val() == "CedMicro") {
            $('#luggage').prop('disabled', true);
            $('#luggage').val(null);
        } else {
            $('#luggage').prop('disabled', false);
        }
    });

    // $('#pickup_location', '#drop_location', '#cab_type').on('change', function () {
    //     $('#fare').css("display", "none");
    //     $('#book_now').css("display", "none");
    //     $("#fare").html("");
    // });

   

    $('#delete').on('click', function (e) {
        var delete_id = $('#id_for_deletion').val();
            $.ajax({
                method: "POST",
                url: "../../../admin/ajax.php",
                data: {
                    id: delete_id
                },
                dataType: "html",
                success: function (fare_is) {
                    $('#fare').html("<b>$ " + fare_is + ".00</b>");
                    $('#book_now').html("<input type=\"submit\" class=\"form-control\" name=\"book_now\" value=\"Book Now\">");
                },
                error: function () {
                    alert("We're sorry for the inconvenience caused.");
                }
            });
            e.preventDefault();
    });
});