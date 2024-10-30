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
            $("#submitBtn").prop('disabled',true);
        }
        else{
            $("#popup").text("");
            $("#submitBtn").prop('disabled',false);
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

})

