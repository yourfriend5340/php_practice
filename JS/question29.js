$('#29input').keyup(function () {
    var value = $(this).val();

    var check = new RegExp('^\d{7}$');
    if (!check.test(value)) {
        //$(this).after("<font class='red_font' id='popup'>請輸入範例中字元，如0~9或 '~' 或是 ','</font>");
        $("#29input").val("");
        $("#popup").text("please enter : 1~9999999");
    }
});