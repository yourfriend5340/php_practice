$(function () {
    $('.textAreaInput').keyup(function () {
        var textVal = $(this).val();
        textVal = textVal.trim();

        var textText = encodeURIComponent(textVal);
        textText = textText.replace(/%0A/, '');//換行不計入字數
        textText = decodeURIComponent(textText);
        //var len = textText.replace(/%[A-F\d]{2}/g, 'U').length;

        if (textVal !== '') {
            if (textText.length > 100) {
                var text100 = textText.substring(0, 100)
                var cnt = textText.length - 1;
                $('#popup').text('你輸入的字串長度：' + cnt);
                //$('#popup2').text('你輸入的字元長度：' + textVal.length);
                $('.textAreaInput').val(text100);
                return false;
            }
            else {
                $('#popup').text('你輸入的字串長度：' + textText.length);
                //$('#popup2').text('你輸入的字元長度：' + len);
                return false;
            }
        }
    });
})