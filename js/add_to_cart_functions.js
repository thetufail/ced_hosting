$('#myTabContent').on('click', '.buynow', function () {
    // if (confirm("Are you sure you want to edit this record?")) {
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

        action = "add to cart";

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

        $.ajax({
            method: "POST",
            url: "add_to_cart_ajax.php",
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
                action:action
            },
            // dataType: "html",
            success: function (product_count) {
                // location.reload();
                $(".product_count").text(product_count);
            },
            error: function () {
                alert("We're sorry for the inconvenience caused.");
            }
        });
    // }
});