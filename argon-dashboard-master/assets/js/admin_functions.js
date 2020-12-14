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

    $('#productsTable').on('click', '.edit', function () {
        $('.form_on_update').css("display", "block")
        var pid = $(this).data("pid");
        var pparentid = $(this).data("pparentid");
        var pname = $(this).data("pname");
        var phtml = $(this).data("phtml");
        var pavailable = $(this).data("pavailable");
        // var plaunchdate = $(this).data("plaunchdate");
        var pmonprice = $(this).data("pmonprice");
        var pannualprice = $(this).data("pannualprice");
        var psku = $(this).data("psku");
        var web_spacefeatures = $(this).data("web_spacefeatures");
        var bandwidthfeatures = $(this).data("bandwidthfeatures");
        var free_domainfeatures = $(this).data("free_domainfeatures");
        var langsupportfeatures = $(this).data("langsupportfeatures");
        var mailboxfeatures = $(this).data("mailboxfeatures");

        $('#prod_id').val(pid);
        $('#prod_parent_id').val(pparentid);
        $('#product_name').val(pname);
        $('#page_html').val(phtml);
        $('#language_support').val(pavailable);
        // $('#language_support').val(plaunchdate);
        $('#monthly_price').val(pmonprice);
        $('#annual_price').val(pannualprice);
        $('#sku').val(psku);
        $('#web_space').val(web_spacefeatures);
        $('#bandwidth').val(bandwidthfeatures);
        $('#free_domain').val(free_domainfeatures);
        $('#language_support').val(langsupportfeatures);
        $('#mailbox').val(mailboxfeatures);

        // var idd = $(this).data("pparentid");
        // console.log(idd);
        // $('#language_support').val(data.idd);
        // var edit_id = $(this).attr("id");
        // var action = "edit";
        // $.ajax({
        //     method: "POST",
        //     url: "ajax.php",
        //     data: {
        //         id: edit_id,
        //         action: action
        //     },
        //     dataType: "html",
        //     success: function () {
        //         // location.reload();
        //     },
        //     error: function () {
        //         alert("We're sorry for the inconvenience caused.");
        //     }
        // });
    });

    $('.form_on_update').on('click', '.update', function () {
        var pid = $(this).val();
        var pparentid = $(this).val();
        var pname = $(this).val();
        var phtml = $(this).val();
        var pavailable = $(this).val();
        // var plaunchdate = $(this).val();
        var pmonprice = $(this).val();
        var pannualprice = $(this).val();
        var psku = $(this).val();
        var web_spacefeatures = $(this).val();
        var bandwidthfeatures = $(this).val();
        var free_domainfeatures = $(this).val();
        var langsupportfeatures = $(this).val();
        var mailboxfeatures = $(this).val();
        var action = "update";

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
                web_spacefeatures: web_spacefeatures,
                bandwidthfeatures: bandwidthfeatures,
                free_domainfeatures: free_domainfeatures,
                langsupportfeatures: langsupportfeatures,
                mailboxfeatures: mailboxfeatures,
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
                    // location.ajax.reload();
                    $('#productsTable').reload('#productsTable');
                },
                error: function () {
                    alert("We're sorry for the inconvenience caused.");
                }
            });
        }
    });
});