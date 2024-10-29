$(function () {
    $('.textAreaInput').keyup(function () {
        var textVal = $(this).val();

        var textText = encodeURIComponent(textVal);
        var len = textText.replace(/%[A-F\d]{2}/g, 'U').length;

        if (textVal !== '') {
            if (textVal.length >= 99) {
                var text100 = textVal.substring(0, 99)
                $('#popup').text('你輸入的字串長度：' + '100');
                $('#popup2').text('你輸入的字元長度：' + '100');
                $('.textAreaInput').val(text100);
                return false;
            }
            else {
                $('#popup').text('你輸入的字串長度：' + textVal.length);
                $('#popup2').text('你輸入的字元長度：' + len);
                return false;
                //alert(text);
            }
        }



    });
})