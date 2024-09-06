$('#input').change(function () {
    var value = $(this).val();

    var ticket = new RegExp('[0-9]$')
    if (!ticket.test(value)) {
        //$(this).after("<tr><td>請輸入 '阿拉伯數字'</td></tr>");
        $("#input").val("");
    }

    $("#year").text("2999");
    $("#howMuchDay").text("3XX");
    $("#YN").text("N");
});