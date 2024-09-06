$('#input').change(function () {
    var value = $(this).val();

    var ticket = new RegExp('[0-9]$')
    if (!ticket.test(value)) {
        //$(this).after("<tr><td>請輸入 '阿拉伯數字'</td></tr>");
        $("#input").val("");
    }

    var level1_price = 0;
    var level2_price = 0;
    var level3_price = 0;
    var tempTime1 = 0;
    var tempTime2 = 0;
    var tempTime3 = 0;
    var cleanFlag = 'N';
    var total = 0;
    //切割計算數值
    if (value <= 600) {
        level1_price = value * 0.5;
        tempTime1 = value;
        cleanFlag = 'Y';
        total = Math.round(level1_price);
    }
    if (value > 600 && value <= 1200) {
        tempTime1 = 600;
        tempTime2 = value - 600;
        level1_price = 600 * 0.5;
        level2_price = tempTime2 * 0.5 * 0.9;

        cleanFlag = 'Y';
        total = Math.round(level1_price + level2_price);
    }
    if (value > 1200) {
        tempTime1 = 600;
        tempTime2 = 600;
        tempTime3 = value - 1200;
        level1_price = 600 * 0.5;
        level2_price = tempTime2 * 0.5 * 0.9;
        level3_price = tempTime3 * 0.5 * 0.79;

        cleanFlag = 'Y';
        total = Math.round(level1_price + level2_price + level3_price);
    }

    $("#time1").text(tempTime1);
    $("#time2").text(tempTime2);
    $("#time3").text(tempTime3);

    $("#price1").text(level1_price);
    $("#price2").text(level2_price);
    $("#price3").text(level3_price);
    $("#total").text(total);
    $(this).after("<tr><td>輸入值為：" + value + "分鐘,費用一共為：" + total + "元</td></tr>");

    if (cleanFlag === 'Y') {
        $("#input").val("");
        cleanFlag = 'N';
    }
});