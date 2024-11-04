<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <script src="js/question.js?20240923" defer></script> -->
    <?php include "head.php"?>
    <title>出現機率</title>
</head>
<body>
<span>輸入三個參數</span><br />
<span>用 PHP 取得亂數值某兩數(含)間，且可指定取得間隔
  (例如1、0.01、0.1)，若未指定間隔就是看兩數的小數位數誰小 並且寫完後用 for 迴圈執行1萬次，印出測試機率資料，驗證機率有平均出現</span><br />

<br />
<form method='GET' action='question101-1.php'>
    請輸入數值1 ：<input type='text' name='input1' /><br />
    請輸入數值2 ：<input type='text' name='input2' /><br />
    請輸入區間數 ：<input type='text' name='input3' />(可略)<br />
    <input type="submit" value="送出">
</form>
<br />

<?php
if(isset($_GET['input1']) && isset($_GET['input2']))
{
    //轉浮點數
    $num1 = floatval($_GET['input1']);//第一數
    $num2 = floatval($_GET['input2']);//第二數
    $num3 = floatval($_GET['input3']);//間隔數

    //求各別小數長度
    $len1 = strlen(substr($num1, strrpos($num1, '.')+1));
    $len2 = strlen(substr($num2, strrpos($num2, '.')+1));
    $len3 = strlen(substr($num3, strrpos($num3, '.')+1));

    if($num3 == 0)
    {
        $maxNum = max($num1,$num2);
        $minNum = min($num1,$num2);
        $maxLen = max($len1, $len2);
        $num3 = '0.';
        for($i=1;$i<$maxLen;$i++){
          $num3 .= '0';
        }
        $numArr[0] = $minNum;
        $numArr[1] = $maxNum;
        $intervalNum = $num3.'1';
    }
    else{
        $maxNum = max($num1,$num2);
        $minNum = min($num1,$num2);
        $maxLen = max($len1, $len2,$len3);
        $numArr[0] = $minNum * (10^$maxLen) / (10^$maxLen);
        $numArr[1] = $maxNum * (10^$maxLen) / (10^$maxLen);
        $intervalNum = $num3;

        $tempNum = ($maxNum * (pow(10,$maxLen)))- ($minNum * (pow(10,$maxLen))) ;

        for($i=2;$i<$tempNum;$i++){
          $numArr[$i] =  ($tempNum + (($intervalNum * ($i-1))* pow(10,$maxLen))) / pow(10,$maxLen);
        }

    }

    var_dump($numArr);

    echo "<br /><br />";
    echo $intervalNum."<br />";
    echo pow(10,$maxLen);



}

?>

</body>
</html>
