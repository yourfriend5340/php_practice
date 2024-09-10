$('#47input').keyup(function () {
    var value = $(this).val();

    var check = new RegExp('[0-9,~]+$')
    if (!check.test(value)) {
        //$(this).after("<font class='red_font' id='popup'>請輸入範例中字元，如0~9或 '~' 或是 ','</font>");
        $("#47input").val("");
        $("#popup").text("請輸入範例中字元，如0~9或 '~' 或是 ','");
    }
});