$(function() {
$('#input').keyup(function () {
    let value = $(this).val();

    //var ticket = new RegExp('^([1-9]|[1-9][0-9]|[1-9][0-9][0-9]|[1-2][0-9][0-9][0-9]|3000)$')

    //if (!ticket.test(value)) {
    //    $("#input").val("");
    //    $("#popup").text("輸入1~3000")
    //    return false;
    //}

    //判別數字正確性，寫法二
    //var valueType = typeof (value);
    //alert(valueType);
    let valueNum= Number(value);

    //如果無法轉數字得到NaN, popup提醒
    if(valueNum.isNaN()){
        alert('輸入的字非數字');
        return false;
    }
    if(valueNum.toString() !== value){
        alert('輸入的字非數字');
        return false;
    }
    if(valueNum > 3000 || valueNum < 1){
        alert('請輸入1~3000的數字');
        return false;
    }
});
})