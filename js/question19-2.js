$(function () {
  var nowStr = '';
  $('.textAreaInput').keyup(function () {
    var textVal = $(this).val();//取字串
    var lastText = textVal.slice(-1);//抓最後一個字元
    var asciiLastText = lastText.charCodeAt();//轉ASCII(十進制)
    var lowercaseLowBound = 97//小寫a
    var lowercaseUpBound = 122;//小寫z
    var uppercaseLowBound = 65;//大寫A
    var uppercaseUpBoune = 90;//大寫Z

    var check = new RegExp('^[A-Z,;.\\s\\n]+$')
    if (!check.test(textVal)) {

      var newText = textVal.slice(0,-1);
      $('.textAreaInput').val(newText);
      $('#popup').text('你輸入的不是大寫字母');
        return false;
    }
    else
    {
      $('#popup').text('');
    }
  });
})

