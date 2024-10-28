$(function () {
    $('.input').blur(function () {
        alert('');
        var textVal = $(this).val();

        var textText = encodeURIComponent(textVal);
        var len = textText.replace(/%[A-F\d]{2}/g, 'U').length;
        if (textVal !== '') {
            $('#popup').text('你輸入的字串長度：' + textVal.length);
            $('#popup2').text('你輸入的字元長度：' + len);
            //alert(text);
        }

    });
})