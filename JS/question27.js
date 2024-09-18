$('#input').change(function () {
    var value = $(this).val();

    var ticket = new RegExp('^([1-9]|[1-9][0-9]|[1-9][0-9][0-9]|[1-2][0-9][0-9][0-9]|3000)$')
    if (!ticket.test(value)) {
        //$(this).after("<tr><td>請輸入 '阿拉伯數字'</td></tr>");
        $("#input").val("");
    }
});