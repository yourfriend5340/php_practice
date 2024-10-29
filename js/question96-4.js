$(function () {
    $('.input').blur(function () {
        var textVal = $(this).val();

        //var reg = new RegExp('/^(1\d{2}|2[0-4]\d|25[0-6]|[1-9]\d|\d)$/');
        let reg = /^(1\d{2}|2[0-4]\d|25[0-6]|[1-9]\d|\d)$/;
        //alert(reg.test(textVal));
        if (reg.test(textVal)) {
            value = Number(textVal);
            $result = value.toString(2);
            $('#popup').text('轉換出來的值為：' + $result);
        }
        else {
            alert('請輸入1-256的數字');
            $('.input').val('');
        }
    });
})