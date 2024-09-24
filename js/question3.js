$(function(){
$('#input').keyup(function () {
    var value = $(this).val();

    //定義中獎號碼
    var arr_specialAward = ['86396830'];//特別獎
    var arr_jackpot = ['53267964'];//特獎
    var arr_headPrize = ['39635796', '98978859', '55566054'];

    var ticket = new RegExp('[0-9]$')
    if (!ticket.test(value)) {
        $(this).after("<tr><td>請輸入8個 '阿拉伯數字'</td></tr>");
        $("#input").val("");
    }

    //輸入至少三個字後開始執行
    if (value.length >= 3) {

        var counter = 0;
        var biggest = 0;
        var getAwardFlag = 0;

        const input_split = value.split('');//將輸入的值轉陣列
        const reverse_input_array = input_split.reverse();//反轉陣列

        //判斷頭獎的獎別
        for (ArrCnt = 0; ArrCnt < arr_headPrize.length; ArrCnt++) {
            var char = arr_headPrize[ArrCnt];
            const Award_split = char.split('');//令獎號的字串轉為陣列
            const reverse_Award_array = Award_split.reverse(); //反轉陣列

            console.log(reverse_Award_array + '___' + reverse_input_array);

            for (i = 0; i <= [(reverse_input_array.length) - 1]; i++) {
                if (reverse_Award_array[i] == reverse_input_array[i]) {
                    counter++
                }
                else {
                    break;
                }

                //考到多重中獎的可能性，故多設一個biggest變數紀錄最大獎
                //第一次中獎時，給biggest值
                if (biggest == 0 && counter > 0) {
                    biggest = counter;
                }
                else {
                    //更大獎項出現時，更新biggest
                    if (counter > biggest) {
                        biggest = counter;
                    }
                }
            }
        }

        switch (biggest) {
            case 3: {
                getAwardFlag = 1;
                $(this).after("<tr><td><span class='red_font'>☆☆☆</span>輸入：" + value + ", 中三星，六獎兩百元</td></tr>");
                break;
            }
            case 4: {
                getAwardFlag = 1;
                $(this).after("<tr><td><span class='red_font'>☆☆☆☆</span>輸入：" + value + ", 中四星，五獎一仟元</td></tr>");
                break;
            }
            case 5: {
                getAwardFlag = 1;
                $(this).after("<tr><td><span class='red_font'>☆☆☆☆☆</span>輸入：" + value + ", 中五星，四獎四仟元</td></tr>");
                break;
            }
            case 6: {
                getAwardFlag = 1;
                $(this).after("<tr><td><span class='red_font'>☆☆☆☆☆☆</span>輸入：" + value + ", 中六星，三獎一萬元</td></tr>");
                break;
            }
            case 7: {
                getAwardFlag = 1;
                $(this).after("<tr><td><span class='red_font'>☆☆☆☆☆☆☆</span>輸入：" + value + ", 中七星，二獎四萬元</td></tr>");
                break;
            }
            case 8: {
                getAwardFlag = 1;
                $(this).after("<tr><td><span class='red_font'>好high！！！</span>輸入：" + value + ", 車子頭款有了，中頭獎20萬</td></tr>");
                $("#input").val("");
                break;
            }

        }

        if (value.length == 8) {
            if (value === arr_specialAward[0]) {
                $(this).after("<tr><td><font class='red_font'>買房子了辣！！！</font>輸入：" + value + ", 發了發了，中特別獎1000萬</td></tr>");
                $("#input").val("");
                return false;
            }

            if (value === arr_jackpot[0]) {
                $(this).after("<tr><td><font class='red_font'>超high！！！</font>輸入：" + value + ", 房子頭期款有了，中特獎200萬</td></tr>");
                $("#input").val("");
                return false;
            }

            if (getAwardFlag == 0) {
                $(this).after("<tr><td>輸入：" + value + "，沒有中獎</td></tr>");
                $("#input").val("");
                return false;
            }

            $("#input").val("");
        }


    }

});

})