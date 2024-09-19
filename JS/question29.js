$('#29input').keyup(function () {
    var value = $(this).val();
    let check = /^[1-9]{1}\d{0,6}$/;
    //var check = new RegExp('^([1-9]|[1-9][0-9]|[1-9][0-9][0-9]|[1-9][0-9][0-9][0-9]|[1-9][0-9][0-9][0-9][0-9]|[1-9][0-9][0-9][0-9][0-9][0-9]|[1-9][0-9][0-9][0-9][0-9][0-9][0-9])$');
    if (!check.test(value)) {

        $("#29input").val("");
        $("#popup").text("please enter : 1~9999999");
    }
    else {
        $("#popup").text("");
    }
});