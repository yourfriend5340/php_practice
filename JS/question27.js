
$('#input').keyup(function () {
    var value = $(this).val();

    var ticket = new RegExp('^([1-9]|[1-9][0-9]|[1-9][0-9][0-9]|[1-2][0-9][0-9][0-9]|3000)$')
    if (!ticket.test(value)) {
        $("#input").val("");
        $("#popup").text("輸入1~3000")
        return false;
    }
});
