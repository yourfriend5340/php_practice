$(function () {
  $('#47input').on('input', function () {
    var value = $(this).val();
    //正則換方式寫
    //var check = new RegExp('[0-9,~]+$')
    var check = /^[0-9,~]+$/;
    if (!check.test(value)) {
      //$(this).after("<font class='red_font' id='popup'>請輸入範例中字元，如0~9或 '~' 或是 ','</font>");
      //$("#47input").val("");
      $("#popup").text("請輸入範例中字元，如0~9或 '~' 或是 ','");
      $("#submitBtn").prop('disabled', true);
    }
    else {
      $("#popup").text("");
      $("#submitBtn").prop('disabled', false);
    }
  });

  $('#question47').submit(function (event) {
    var value = $('#47input').val();
    let str = value.trim();
    var check = /^[0-9,~]+$/;
    if (str.length === 0 || !check.test(value)) {
      //event.stopPropagation();
      //$("#47input").val("");
      $("#popup").text("不允許空值或是不合條件的值！(只允許1~9, 及符號 '~' 或 ',' )，請修改後再送出！");
      return false;
    }
  });

  $(".inputNumber47-3").on('change', function () {
    var id = $(this).attr("id");
    id = id.replace("question","")
    var inputAns = Number($(this).val());
    var id_arr = id.split("");//利用ID來傳題目，如11為1*1
    var ans = 0;

    setTimeout(function () {
      ans = id_arr[0] * id_arr[1];

      if (inputAns !== ans) {
        $("#s" + id_arr[0] + id_arr[1]).css("color","red");
        $("#s" + id_arr[0] + id_arr[1]).text("X");
        $("#question" + id_arr[0] + id_arr[1]).val("");
        return false;
      }
      else {
        //當例如答對2-9時，要跳到3-1
        $("#s" + id_arr[0] + id_arr[1]).css("color","green");
        $("#s" + id_arr[0] + id_arr[1]).text("O");
        //lastResult = $("#s" + id_arr[0] + id_arr[1]).text();

        if (id_arr[1] >= 9) {
          id_arr[0] = Number(id_arr[0]) + 1;
          id_arr[1] = 1;
        }
        else {
          id_arr[1] = Number(id_arr[1]) + 1;
        }

        var nextQ = $("#question" + id_arr[0] + id_arr[1]).attr("id");
        //alert(nextQ +'_'+lastResult);
        if(nextQ == undefined)
        {
          alert('後面沒有題目了');
        }
        else
        {
          $("#question" + id_arr[0] + id_arr[1]).focus();
        }
      }


    }, 100);
  })
})

