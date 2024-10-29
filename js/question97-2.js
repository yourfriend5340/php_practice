$(function () {
    $('.textAreaInput').blur(function () {
        var textVal = $(this).val().toString();
        //textVal = textVal.toString();

        var outputText = textVal.trim();
        var outputText1 = textVal.replace(" ","")
        var outputText2 = textVal.replace(/\s/g,'')
        if (textVal !== '') {
            $('.textAreaInput').val(outputText2);

            $('#textAreaOutput0').val(outputText);
            $('#preOutput0').text(outputText);
            $('#popup0').text("textVal.trim()，讓字串已更動");

            $('#textAreaOutput1').val(outputText1);
            $('#preOutput1').text(outputText1);
            $('#popup1').text("textVal.replace(\' \','')，讓字串已更動");

            $('#textAreaOutput2').val(outputText2);
            $('#preOutput2').text(outputText2);
            $('#popup2').text("textVal.replace(/\\s/g,'')，讓字串已更動");
            //alert(text);
        }

    });
})