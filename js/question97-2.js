$(function () {
    $('.textAreaInput').blur(function () {
        var textVal = $(this).val();

        var outputText = textVal.trim();
        var outputText1 = textVal.replace(' ','')
        var outputText2 = textVal.replace(/\s/g,'')
        if (textVal !== '') {
            $('.textAreaInput').val(outputText2);
            $('#popup0').text("textVal.trim()，讓字串已更動：___" + outputText);
            $('#popup1').text("textVal.replace(' ','')，讓字串已更動：___" + outputText1);
            $('#popup2').text("textVal.replace(/\\s/g,'')，讓字串已更動：___" + outputText2);
            //alert(text);
        }

    });
})