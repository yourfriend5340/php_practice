//version 1，有bug，無法處理中文打字的判別
// $(function () {
//   var nowStr = '';
//   $('.textAreaInput').keyup(function (event) {
//     var textVal = $(this).val();//取字串
//     var lastText = textVal.slice(-1);//抓最後一個字元
//     var asciiLastText = lastText.charCodeAt();//轉ASCII(十進制)
//     var lowercaseLowBound = 97//小寫a
//     var lowercaseUpBound = 122;//小寫z
//     var keysCode = event.keyCode;
//     //alert(lastText);
//
//     if(keysCode !=8) {
//       if (textVal !== '') {
//         $('#popup').text('你輸入的字元：' + lastText);
//
//         if (asciiLastText >= lowercaseLowBound && asciiLastText <= lowercaseUpBound) {
//           lastText = lastText.toUpperCase();
//
//           $('#popup2').text('你輸入的字被換成大寫：' + lastText);
//           nowStr = nowStr.substring(-1);
//           nowStr = nowStr + lastText;
//         } else {
//           nowStr = nowStr + lastText;
//           $('#popup2').text('');
//         }
//
//         $('.textAreaInput').val(nowStr);
//         //alert(text);
//       }
//     }
//     else{
//       nowStr = $(this).val();//取字串
//     }
//   });
// })

//version2
$(function () {
  var nowStr = '';
  $('.textAreaInput').keyup(function (event) {
    var textVal = $(this).val();//取字串
    var lastText = textVal.slice(-1);//抓最後一個字元
    var asciiLastText = lastText.charCodeAt();//轉ASCII(十進制)
    var lowercaseLowBound = 97//小寫a
    var lowercaseUpBound = 122;//小寫z

    // lastText = textVal.slice(-1);
    // //alert(lastText);
    // var check = new RegExp('^[A-Z]+$')
    // if (!check.test(lastText))
    // {
    //     var newText = textVal.slice(0,-1);//除了最後一個字的字串
    //     var check2 = new RegExp('^[a-z]+$')
    //   if (check2.test(lastText)) {
    //     $('.textAreaInput').val(newText + lastText.toUpperCase());
    //   }
    //   else
    //   {
    //     $('.textAreaInput').val(newText);
    //   }
    //
    // }
    //var check2 = new RegExp('^[a-z]+$')
    //if (check2.test(textVal)) {
      $('.textAreaInput').val(textVal.toUpperCase());
    //}
  })
})

