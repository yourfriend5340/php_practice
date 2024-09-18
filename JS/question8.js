$("#celTofah").click(function () {
    var cel = $("#celsius").val();

    var degree = new RegExp('[0-9]$')
    if (!degree.test(cel)) {
        //$(this).after("<tr><td>請輸入 '阿拉伯數字'</td></tr>");
        $("#celTofah").val("");

    }

    if (cel === '') {
        alert('沒輸入攝氏溫度');
        return false;
    }
    else {
        fah = (cel * 9 / 5) + 32;
        $("#fahrenheit").replaceWith("<input type='text' id='fahrenheit' maxlength='8' value = " + fah.toFixed(2) + '>');
    }
});

$("#fahTocel").click(function () {
    var fah = $("#fahrenheit").val();

    var degree = new RegExp('[0-9]$')
    if (!degree.test(fah)) {
        //$(this).after("<tr><td>請輸入 '阿拉伯數字'</td></tr>");
        $("#fahTocel").val("");

    }

    if (fah === '') {
        alert('沒輸入華氏溫度');
        return false;
    }
    else {
        cel = (fah - 32) * 5 / 9;
        $("#celsius").replaceWith("<input type='text' id='celsius' maxlength='8' value = " + cel.toFixed(2) + '>');
    }
});