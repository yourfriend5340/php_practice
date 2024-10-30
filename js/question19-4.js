$(function () {
  var nowStr = '';
  $('.textAreaInput').keyup(function (event) {
    var textVal = $(this).val();//取字串
    var lastText = textVal.slice(-1);//抓最後一個字元
    var asciiLastText = lastText.charCodeAt();//轉ASCII(十進制)
    var lowercaseLowBound = 97//小寫a
    var lowercaseUpBound = 122;//小寫z
    var keysCode = event.keyCode;
    //alert(lastText);

    if(keysCode !=8) {
      if (textVal !== '') {
        $('#popup').text('你輸入的字元：' + lastText);

        if (asciiLastText >= lowercaseLowBound && asciiLastText <= lowercaseUpBound) {
          lastText = lastText.toUpperCase();

          $('#popup2').text('你輸入的字被換成大寫：' + lastText);
          nowStr = nowStr.substring(-1);
          nowStr = nowStr + lastText;
        } else {
          nowStr = nowStr + lastText;
          $('#popup2').text('');
        }

        $('.textAreaInput').val(nowStr);
        //alert(text);
      }
    }
    else{
      nowStr = $(this).val();//取字串
    }
  });
})

