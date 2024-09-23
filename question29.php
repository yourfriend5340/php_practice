<!DOCTYPE html>
<head>
    <script src="./JS/question29.js" defer></script>
    <?php include "head.php"?>
    <title>支票簿大小寫轉換器</title>
</head>
<body>
    <span>支票簿大小寫轉換器</span>
    <hr>
    <form class="form1" action="question29.php" method="GET">
    <table class="question29Input">
        <tbody>
            <tr>
                <td>請輸入想顯示的數字：
                    <input type="text" name="29input" id="29input"  placeholder="ex：1~9999999">
                    <input type="submit" value="輸入">
                    <label id="popup"></label>
                </td>
            </tr>
        </tbody>
    </table>
    </form>

    <?php
    if(isset($_GET['29input']))
    {
        $tempArr = array(   
                    '1'=>'壹',
                    '2'=>'貳',
                    '3'=>'參',
                    '4'=>'肆',
                    '5'=>'伍',
                    '6'=>'陸',
                    '7'=>'染',
                    '8'=>'捌',
                    '9'=>'玖',
                    '0'=>'零'
                );
        $tempArr2 = str_split($_GET['29input']);
        $counter = count($tempArr2);
        
        $degreeArr = array(
                    0 =>'拾',
                    1 =>'百',
                    2 =>'仟',
                    3 =>'萬',
                    4 =>'十',
                    5 =>'百'
        );
        $index = 0;
        $str = '';
        //字串切割後，從後面讀回來
        for($i=$counter-1;$i>=0;$i--){
            $str .= $tempArr[$tempArr2[$i]];

            //若下一位數有值，補上單位
            if(isset($tempArr2[$i-1]))
            {   
                if($tempArr[$tempArr2[$i-1]] !== '零')
                {
                    $str .= $degreeArr[$index];
                }
                
                $index++;
            }
        }
        //strrev會亂碼，用其他方式輸出, 改用切割成array，反轉array後再輸出
        //mb_str_split為php7.4以上支援，因練習是採用php8，故使用不會出錯
        $strArr = array_reverse(mb_str_split($str));
        $counter = count($strArr);
        for ($i=0;$i<$counter;$i++){
            echo ($strArr[$i]);
        }
        echo '元';

    }
?>

</body>
</html>


