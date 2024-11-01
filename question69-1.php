<!DOCTYPE html>
<html lang="en">
<head>
<!--    <script src="js/question29.js?20240923" defer></script>-->
    <?php include "head.php"?>
    <title>支票簿大小寫轉換器</title>
</head>
<body>
    <span>支票簿大小寫轉換器</span>
    <hr>
    <form class="form1" action="question69-1.php" method="GET">
    <table class="question29Input">
        <tbody>
            <tr>
                <td>請輸入想顯示的數字：<br />
                  數字一：
                    <input type="text" name="69input" id="69input"  placeholder="ex：0.1"><br />
                  數字二：
                    <input type="text" name="69input2" id="69input2" placeholder="ex：0.7"><br />
                    <input type="submit" value="輸入">
                    <span id="popup"></span>

                </td>
            </tr>
        </tbody>
    </table>
    </form>

    <?php
    if(isset($_GET['69input']) && isset($_GET['69input2']))
    {
      if($_GET['69input'] == '' || $_GET['69input2']== '')
      {
        echo '請輸入兩個數值！';
        exit;
      }

      //bcadd 吃的是字串，非數字
      $num1 = ($_GET['69input']);
      $num2 = ($_GET['69input2']);

      $len1 = strlen(substr($num1, strrpos($num1, '.')+1));
      $len2 = strlen(substr($num2, strrpos($num2, '.')+1));
      echo '第一個數有 '.$len1.' 個小數位數'.'<br />';
      echo '第二個數有 '.$len2.' 個小數位數'.'<br />';

      if($len1 > $len2)
      {
        $largeNum = $len1;
      }
      else
      {
        $largeNum = $len2;
      }

      //EX：小數點有3位，mul會組成1000，即三個0
      $mulStr = '1';
      for($i=1;$i<=$largeNum;$i++){
        $mulStr .= '0';
      }
      $mulStr .= intval($mulStr);

      $sum0= floatval($num1)+floatval($num2);
      echo '先把變數轉floatval版結果：'.$sum0.'<br />';

      $sum1 = (((floatval($num1)*$mulStr))+((floatval($num2)*$mulStr))) / $mulStr;
      echo '把變數轉整數後，再補回小數點版：'.number_format($sum1,$largeNum).'<br />';

      echo '使用bcadd版：'.bcadd($num1,$num2,$largeNum);

      //$sum2 = floor(($num1+$num2)*10);
      //echo $sum2.'<br />';
      //echo floatval($_GET['69input']).'<br />';
      //echo floatval($_GET['69input2']).'<br />';
      //echo floor((0.7+0.1)*10).'<br />';
      //echo floor(0.1+0.7);
      //$sumDirect = round(($num1 + $num2),2);
      //$sumFloatVal = round((floatval($num1)+(floatval($num2))),2);
      //$sumFloor = round(($num1+$num2),2);
      //$sumBcadd = round((bcadd($num1,$num2 ,2)),2);
      //echo '字串相加：'.$sumDirect.'<br />';
      //echo '轉floatval相加：'.$sumFloatVal.'<br />';
      //echo '使用floor：'.$sumFloor.'<br />';
      //echo '使用bcadd：'.$sumBcadd .'<br />';

    }
?>

</body>
</html>


