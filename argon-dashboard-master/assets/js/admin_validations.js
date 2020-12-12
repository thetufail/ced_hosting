console.log('yes');

// $('#product_name').on('keyup', function () {
//     this.value = this.value.replace(/[^[0-9]*[A-Za-z]+[A-Za-z0-9]*]/g, '');
// });
$('#product_name').on('blur', function () {
    var email = new RegExp('^[0-9]*[A-Za-z]+[0-9]*$');

    if (email.test(this.value)) {
        $(".form-group").css("background-color", "yellow");
        // alert('Great, you entered an E-Mail-address');
    } else {
        this.value = this.value.replace(this.value, '');
        $(".form-group").css("background-color", "red");
    }
});

$('.formfieldluggage').on('keyup', function () {
});

$('.formfieldusername').on('keyup', function () {
    this.value = this.value.replace(/[^a-zA-Z0-9\_\@\.]/g, '');
});

$('.formfieldname').on('keyup', function () {
    this.value = this.value.replace(/[^a-zA-Z\s]/g, '');
});

$('.formfieldnumber').on('keyup', function () {
    this.value = this.value.replace(/[^0-9]/g, '');
});

$('.formfieldlocation').on('keyup', function () {
    this.value = this.value.replace(/[^a-zA-Z0-9\s]/g, '');
});