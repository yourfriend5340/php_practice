$(function () {
    $('.textAreaInput').blur(function () {
        var textVal = $(this).val().toString();
        //textVal = textVal.toString();

        //var outputText = textVal.trim();
        //var outputText1 = textVal.replace(' ', "")
        var outputText2 = textVal.replace(/\s/g, '')
        if (textVal !== '') {
            $('.textAreaInput').val(outputText2);

            $('#popup0').text("字串已更動");

        }

    });
})