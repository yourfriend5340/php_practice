$("#celTofah").click(function () {
    var cel = $("#celsius").val();

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

    if (fah === '') {
        alert('沒輸入華氏溫度');
        return false;
    }
    else {
        cel = (fah - 32) * 5 / 9;
        $("#celsius").replaceWith("<input type='text' id='celsius' maxlength='8' value = " + cel.toFixed(2) + '>');
    }
});