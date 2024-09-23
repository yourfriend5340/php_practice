$(function() {
$("#celTofah").click(function () {
    var cel = $("#celsius").val();

    var degree = new RegExp('^[0-9]+$')
    if (!degree.test(cel)) {
        $("#celsius").val("");
        $("#pupup").text("請輸入數字");
        return false;
    }
    else {
        $("#pupup").text("");
    }

    if (cel === '') {
        alert('沒輸入攝氏溫度');
        return false;
    }
    else {
        fah = (cel * 9 / 5) + 32;
        $("#fahrenheit").val(fah.toFixed(2));
        //$("#fahrenheit").replaceWith("<input type='text' id='fahrenheit' maxlength='8' value = " + fah.toFixed(2) + '>');
    }
});

$("#fahTocel").click(function () {
    var fah = $("#fahrenheit").val();

    //因為是字串的關係，所以要加跳脫，建議好記的話，還是用例如：let str = /^\d+$/
    var degree = new RegExp('^\\d+$')
    if (!degree.test(fah)) {

        $("#fahrenheit").val("");
        $("#pupup").text("請輸入數字");
        return false;
    }
    else {
        $("#pupup").text("");
    }

    if (fah === '') {
        alert('沒輸入華氏溫度');
        return false;
    }
    else {
        cel = (fah - 32) * 5 / 9;
        $("#celsius").val(cel.toFixed(2));
        //$("#celsius").replaceWith("<input type='text' id='celsius' maxlength='8' value = " + cel.toFixed(2) + '>');
    }
});

})