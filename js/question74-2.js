$(function () {
    $('.textAreaInput').blur(function () {
        var textVal = $(this).val().trim();

        var textText = encodeURIComponent(textVal);
        textText = textText.replace(/%0A/g, '');//換行不計入字數
        textText = decodeURIComponent(textText);
        //alert(textText);
        //var len = textText.replace(/%[A-F\d]{2}/g, 'U').length;
        if (textVal !== '') {
            $('#popup').text('你輸入的字串長度：' + textText.length);
            //$('#popup2').text('你輸入的字元長度：' + len);

        }

    });
})