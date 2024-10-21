$(function () {
    //新增一行資料
    $('#newLine').click(function () {
        var serial = Number($("#recordCount").text());
        if (serial.isNaN) {
            $("#caution").text("Oooooops!!!無法轉成數字");
            return false;
        }
        else {
            serial = serial + 1;
        }

        //各欄的id取名rule，serial的流水號加上，-1 ~ -7 的編號
        var insertHTML = '<tr id="no' + serial + '">' +
            '<td>' + serial + '</td>' +
            '<td><input type="number" min="1" max="42" step="1" id="no' + serial + '-1" class="q4TD"></td>' +
            '<td><input type="number" min="1" max="42" step="1" id="no' + serial + '-2" class="q4TD"></td>' +
            '<td><input type="number" min="1" max="42" step="1" id="no' + serial + '-3" class="q4TD"></td>' +
            '<td><input type="number" min="1" max="42" step="1" id="no' + serial + '-4" class="q4TD"></td>' +
            '<td><input type="number" min="1" max="42" step="1" id="no' + serial + '-5" class="q4TD"></td>' +
            '<td><input type="number" min="1" max="42" step="1" id="no' + serial + '-6" class="q4TD"></td>' +
            '<td><input type="number" min="1" max="42" step="1" id="no' + serial + '-7" class="q4TD"></td>' +
            '<td><button class="question4Delete" value="' + serial + '">delete</button></td>' +
            '</tr>';
        //寫法二專用，用寫法1時記得把下行註解
        $("#question4TrStart").append(insertHTML);
        /*
            //寫法1-1：利用複合鍵的方式去
            //留意程式的先後順序，要先有元件才能綁事件
            $("#question4TrStart").append(insertHTML);
            //使用者送出一行資料之檢查
            $("#no"+serial+" .question4Insert").click(function(){
                var check = /^[1-42]$/;
                var counter = Number($("#recordCount").text());
                alert('test');
                //共有幾筆獎卷資料
                if(counter > 0) {
                    for (i=1;i<=counter;i++) {
    
                        //每筆資料有8欄位(流水號+7個獎號)
                        for(j=1;j<=7;j++) {
                            var id = "#"+ i + "-" + j;
                            var serial = Number($(id).text());
    
                            if (!check.test(serial)) {
                                $("#caution").text("第"+ j +"欄有問題，請輸入1~42的阿拉伯數字");
                                //$("#caution").val("");
                                return false;
                            }
                        }
                    }
                }
                else{
                    //原則上確定鍵是使用者新增一行才會產生，應該不會跑到這邊
                    $("#caution").text("沒有資料，故按這個鍵沒有用");
                }
            });
        */
        /*
            //寫法1-2
            var $insertHTML = $(insertHTML);//先把jquery物件化
            //以下兩行是可以改變先後順序，沒有要求先插入物件，再綁定事件，
            $insertHTML.appendTo("#question4TrStart");
            $insertHTML.find(".question4Insert").click(function(){
                alert('test');
            });
        */
        /*
            //寫法1-3
            var $insertHTML = $(insertHTML);//先把jquery物件化
            //$insertHTML.appendTo("#question4TrStart");
            $("#question4TrStart").append($insertHTML);
            $insertHTML.find(".question4Insert").click(function(){
                alert('test');
            });
    
        */
        $("#recordCount").text(serial);
    });
})

/*
//寫法2-1
$(document).on('click'," .question4Insert",function(){
   alert('test');
})
*/

//寫法2-2
//以下兩行都是可以執行的，有指定父元素的方式
//$('.indexTable').on('click'," .question4Insert",function(){
$('#question4TrStart').on('click', " .question4Delete", function () {
    var value = $(this).val();
    var yes = confirm('will delete row :' + value);
    if (yes) {
        $("#no" + value).remove();
    }

})

