$(function() {
  $('#69input').change(function () {
  var num1 = $(this).val();

  $('#69input2').prop('disabled',false);
  $('#69input2').focus();

      $('#69input2').change(function(){
        var num2 = $(this).val();
        //小數點出現位置
        var pointIndex1 = (num1.indexOf('.')) + 1;
        var pointIndex2 = (num2.indexOf('.')) + 1;
        //抓小數點後字串
        var str1= num1.substring(pointIndex1);
        var str2 = num2.substring(pointIndex2);
        //算長度
        var len1 = str1.length;
        var len2 = str2.length;
        var largeName = 0;
        if(len1 > len2)
        {
          largeNum = len1;
        }
        else
        {
          largeNum = len2;
        }

        //決定還原成整數時要乘的值
        var culStr = '1';
        for (i = 1 ; i <= largeNum ; i++){
          culStr = culStr + '0';
        }
        //轉換成數字開始計算
        culStr = Number(culStr);
        num1 = Number(num1);
        num2 = Number(num2);
        //alert(culStr + '___' + num1 + '___' + num2);

        $('#popupLen1').text('第一值小數點長度為：' + len1);
        $('#popup1').text('使用將兩數還原成整數後，再補回小數點法，求出值為：' + (((num1*culStr)+(num2*culStr)) / culStr));

        num1 = Number(num1.toFixed(largeNum));
        num2 = Number(num2.toFixed(largeNum));
        $('#popupLen2').text('第二值小數點長度為：' + len2);
        $('#popup2').text('使用toFixed，求出值為：' +  (num1 + num2));
        //alert(num1 + '__' + num2);
    })
  });
})