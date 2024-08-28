/*此段方法，是使用延時跳popup的視窗提示使用者，留作參考
$('#input').on("input", function () {
    var value = $(this).val();
    setTimeout(function () {
        if (value.length == 8) {
            var ticket = new RegExp('[0-9]{8}$')

            if (!ticket.test(value)) {
                alert('請輸入8個數字，勿輸入其他字元');
                $("#input").val("");
            }
        }
    }, 200);
});
*/

$('#input').on("input", function () {
    var value = $(this).val();

    if (value.length == 8) {
        var ticket = new RegExp('[0-9]{8}$')
        if (!ticket.test(value)) {
            $(this).after("<tr><td>輸出格式錯誤，請輸入8個 '阿拉伯數字' ，非其他字元</td></tr>");
            $("#input").val("");
        }
        else {
            if (value === "11111111") {
                $(this).after("<tr><td>發票號碼：" + value + "，中獎了</td></tr>");
                $("#input").val("");
            }
            if(true){
                $(this).after("<tr><td>發票號碼：" + value + "，中獎了</td></tr>");
                $("#input").val("");
            }
            else {
                $(this).after("<tr><td>發票號碼：" + value + "，沒有中獎</td></tr>");
                $("#input").val("");
            }
        }
    }
});