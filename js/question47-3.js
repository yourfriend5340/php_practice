$(function() {
    $('#47input').on('input',function () {
        var value = $(this).val();
        //正則換方式寫
        //var check = new RegExp('[0-9,~]+$')
        var check = /^[0-9,~]+$/;
        if (!check.test(value)){
            //$(this).after("<font class='red_font' id='popup'>請輸入範例中字元，如0~9或 '~' 或是 ','</font>");
            //$("#47input").val("");
            $("#popup").text("請輸入範例中字元，如0~9或 '~' 或是 ','");
            $("#submitBtn").attr('disabled',true);
        }
        else{
            $("#popup").text("");
            $("#submitBtn").attr('disabled',false);
        }
    });

    $('#question47').submit(function(event){
        var value = $('#47input').val();
        let str = value.trim();
        var check = /^[0-9,~]+$/;
        if(str.length === 0 || !check.test(value))
        {
            //event.stopPropagation();
            //$("#47input").val("");
            $("#popup").text("不允許空值或是不合條件的值！(只允許1~9, 及符號 '~' 或 ',' )，請修改後再送出！");
            return false;
        }
    });

      $(".inputNumber47-3").on('change',function(){
        var id = $(this).attr("id");
        var inputAns = Number($(this).val());
        var id_arr = id.split("");//利用ID來傳題目，如11為1*1
        var ans = 0;
        setTimeout(function(){
          ans = id_arr[0] * id_arr[1];
          //alert('答錯了'+ ans + inputAns);
          //alert(id_arr[0] + id_arr[1]);
          if(inputAns !== ans) {
            alert('答錯了');
            $("#" + id_arr[0] + id_arr[1]).val("");
            //$("#s" + id_arr[0] + id_arr[1]).text("答錯了");
            return false;
          }
          else{
            //當例如答對2-9時，要跳到3-1
            $("#s" + id_arr[0] + id_arr[1]).text("");
            if(id_arr[1] >= 9){
              id_arr[0] = Number(id_arr[0]) + 1;
              id_arr[1] = 1;
            }
            else{
              id_arr[1] = Number(id_arr[1]) + 1;
            }

            if(id_arr[0] > 9){
              alert('答對了，且後面沒題目了');
            }
            else
            {
              alert('答對了');
              $("#" + id_arr[0] + id_arr[1]).focus();
            }
          }
        },500);

      })
})

