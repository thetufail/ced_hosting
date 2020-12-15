$(document).ready(function (e) {

    // $('#delete').on('change', function () {
    //     if ($('#cab_type').val() == "CedMicro") {
    //         $('#luggage').prop('disabled', true);
    //         $('#luggage').val(null);
    //     } else {
    //         $('#luggage').prop('disabled', false);
    //     }
    // });

    // $('#pickup_location', '#drop_location', '#cab_type').on('change', function () {
    //     $('#fare').css("display", "none");
    //     $('#book_now').css("display", "none");
    //     $("#fare").html("");
    // });

    // $("#recordListing").on('click', '.delete', function(){
    // 	var id = $(this).attr("id");		
    // 	var action = "deleteRecord";
    // [a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)+ email
    // 	if(confirm("Are you sure you want to delete this record?")) {
    // 		$.ajax({
    // 			url:"ajax_action.php",
    // 			method:"POST",
    // 			data:{id:id, action:action},
    // 			success:function(data) {					
    // 				dataRecords.ajax.reload();
    // 			}
    // 		})
    // 	} else {
    // 		return false;
    // 	}
    // });	

    // -------------- CATEGORY TABLE --------------

    $('#categoryTable').on('click', '.edit_category', function () {
        if (confirm("Are you sure you want to edit this record?")) {
            $('.form_on_update_category').css("display", "block")
            $('.createnewcategory').css("display", "none")
            var id = $(this).data("pid");
            var pparentid = $(this).data("pparentid");
            var pname = $(this).data("pname");
            var phtml = $(this).data("phtml");
            var pavailable = $(this).data("pavailable");
            // var plaunchdate = $(this).data("plaunchdate");

            $('#id').val(id);
            $('#prod_parent_id').val(pparentid);
            $('#product_name').val(pname);
            $('#page_html').val(phtml);
            $('.is_available').val(pavailable);
            // $('#language_support').val(plaunchdate);
        }
    });

    $('.form_on_update_category').on('click', '.update_category', function () {
        alert("Hii");
        var id = $('#id').val();
        var pparentid = $('#prod_parent_id').val();
        var pname = $('#product_name').val();
        var phtml = $('#page_html').val();
        var pavailable = $('.is_available').val();
        console.log(id);
        console.log(pparentid);
        console.log(pname);
        console.log(phtml);
        console.log(pavailable);
        var action = "update_category";
        if (confirm("Are you sure you want to update this record?")) {
            $.ajax({
                method: "POST",
                url: "ajax.php",
                data: {
                    id: id,
                    pparentid: pparentid,
                    pname: pname,
                    phtml: phtml,
                    pavailable: pavailable,
                    action: action
                },
                dataType: "html",
                success: function () {
                    location.reload();
                },
                error: function () {
                    alert("We're sorry for the inconvenience caused.");
                }
            });
        }
    });

    $('#categoryTable').on('click', '.delete_category', function () {
        var delete_id = $(this).attr("id");
        var action = "delete_category";
        if (confirm("Are you sure you want to delete this record?")) {
            $.ajax({
                method: "POST",
                url: "ajax.php",
                data: {
                    id: delete_id,
                    action: action
                },
                // dataType: "html",
                success: function () {
                    location.reload();
                    // $('#categoryTable').reload('#categoryTable');
                },
                error: function () {
                    alert("We're sorry for the inconvenience caused.");
                }
            });
        }
    });

    // -------------- PRODUCTS TABLE --------------

    $('#productsTable').on('click', '.edit', function () {
        if (confirm("Are you sure you want to edit this record?")) {
            $('.form_on_update').css("display", "block")
            var id = $(this).data("updatepid");
            var pid = $(this).data("pid");
            var pparentid = $(this).data("pparentid");
            var pname = $(this).data("pname");
            var phtml = $(this).data("phtml");
            var pavailable = $(this).data("pavailable");
            // var plaunchdate = $(this).data("plaunchdate");
            var pmonprice = $(this).data("pmonprice");
            var pannualprice = $(this).data("pannualprice");
            var psku = $(this).data("psku");
            var web_space = $(this).data("web_space");
            var bandwidth = $(this).data("bandwidth");
            var free_domain = $(this).data("free_domain");
            var langsupport = $(this).data("langsupport");
            var mailbox = $(this).data("mailbox");

            $('#prod_id').val(id);
            $('#prod_parent_id').val(pparentid);
            $('#product_name').val(pname);
            $('#page_html').val(phtml);
            $('.is_available').val(pavailable);
            // $('#language_support').val(plaunchdate);
            $('#monthly_price').val(pmonprice);
            $('#annual_price').val(pannualprice);
            $('#sku').val(psku);
            $('#web_space').val(web_space);
            $('#bandwidth').val(bandwidth);
            $('#free_domain').val(free_domain);
            $('#language_support').val(langsupport);
            $('#mailbox').val(mailbox);
        }
    });

    $('.form_on_update').on('click', '.update', function () {
        // alert("Hii");
        var pid = $('#prod_id').val();
        var pparentid = $('#prod_parent_id').val();
        var pname = $('#product_name').val();
        var phtml = $('#page_html').val();
        var pavailable = $('.is_available').val();
        var pmonprice = $('#monthly_price').val();
        var pannualprice = $('#annual_price').val();
        var psku = $('#sku').val();
        var web_space = $('#web_space').val();
        var bandwidth = $('#bandwidth').val();
        var free_domain = $('#free_domain').val();
        var langsupport = $('#language_support').val();
        var mailbox = $('#mailbox').val();
        console.log(pid);
        console.log(pparentid);
        console.log(pname);
        console.log(phtml);
        console.log(pavailable);
        console.log(pmonprice);
        console.log(pannualprice);
        console.log(psku);
        console.log(web_space);
        console.log(bandwidth);
        console.log(free_domain);
        console.log(langsupport);
        console.log(mailbox);
        var action = "update";
        if (confirm("Are you sure you want to update this record?")) {
            $.ajax({
                method: "POST",
                url: "ajax.php",
                data: {
                    pid: pid,
                    pparentid: pparentid,
                    pname: pname,
                    phtml: phtml,
                    pavailable: pavailable,
                    pmonprice: pmonprice,
                    pannualprice: pannualprice,
                    psku: psku,
                    web_space: web_space,
                    bandwidth: bandwidth,
                    free_domain: free_domain,
                    langsupport: langsupport,
                    mailbox: mailbox,
                    action: action
                },
                dataType: "html",
                success: function () {
                    location.reload();
                },
                error: function () {
                    alert("We're sorry for the inconvenience caused.");
                }
            });
        }
    });

    $('#productsTable').on('click', '.delete', function () {
        var delete_id = $(this).attr("id");
        var action = "delete";
        if (confirm("Are you sure you want to delete this record?")) {
            $.ajax({
                method: "POST",
                url: "ajax.php",
                data: {
                    id: delete_id,
                    action: action
                },
                // dataType: "html",
                success: function () {
                    location.reload();
                    // $('#productsTable').reload('#productsTable');
                },
                error: function () {
                    alert("We're sorry for the inconvenience caused.");
                }
            });
        }
    });
});