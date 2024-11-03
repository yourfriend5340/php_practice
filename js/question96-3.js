$(function () {
    $('.input').blur(function () {
        var textVal = $(this).val();
        //var reg = new RegExp('/^(1\d{2}|2[0-4]\d|25[0-6]|[1-9]\d|\d)$/');
        let reg = /^(1\d{2}|2[0-4]\d|25[0-6]|[1-9]\d|\d)$/;
        //alert(reg.test(textVal));

        function DectoBin($decimal) {
            $decimal = Number($decimal)
            $binary = '';

            do {
                $binary = ($decimal % 2) + $binary;
                $decimal = parseInt($decimal / 2);
            } while ($decimal != 0);

            return ($binary);
        }

        if (reg.test(textVal)) {
            result = DectoBin(textVal);
            var count1 = (result.split("1").length) - 1;
            var count0 = (result.split("0").length) - 1;
            $('#popup').text('轉換出來的值為：' + result);
            $('#popup2').text('1的個數有：' + count1 + '個');
            $('#popup3').text('0的個數有：' + count0 + '個');
        }
        else {
            alert('請輸入1_256的數字');
            $('.input').val('');
            $('#popup').text('');
            $('#popup2').text('');
            $('#popup3').text('');
        }
    });
})