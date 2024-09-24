<!DOCTYPE html>
<html lang="en">
<head>
    <script src="js/question27.js?20240923" defer></script>
    <?php include "head.php"?>
    <title>判斷閏年</title>
</head>
<body class="indexBody">
    <span>判斷閏年</span>
    <form class="form1" action="question27.php" method="GET" >
        <table class="question3">
            <tbody>
                <tr>
                    <td>
                        請輸入一個年份(1~3000)：
                        <input type="number" id="input" name="input" maxlength="4" min="1" max="3000" step="1">
                        <input type="submit" value="輸入">
                        <span id="popup"></span>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>


<?php
if(isset($_GET['input']))
{
    $year = intval($_GET['input']);

    //如intval failure時return 0，會過不了$year >=1，因此不再加長判斷
    if($year <= 3000 && $year >= 1)
    {
            if ($year % 4 === 0  )
            {
                if($year % 100 === 0)
                {
                    if($year % 400 === 0)
                    {
                        $result = true; //閏年
                    }
                    else
                    {
                        $result = false;
                    }
                }
                else{
                    $result = true;
                }
            }
            else
            {
                $result = false; //平年
            }
            
            if($result)
            {
                $day = 366;
                $YN = "是";
            }
            else
            {
                $day = 365;
                $YN = "否";
            }
            echo "<br /><table class='indexTable'>
                    <thead class='indexThead'>
                        <tr><td colspan='3'>方法一</td></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>你輸入的年份</td>
                            <td>該年天數</td>
                            <td>是否閏年</td>
                        </tr>
                    <tr>
                        <td>".$year."</td>
                        <td>
                            <p class='redFont'>".$day."天</p>
                        </td>
                        <td>".$YN."</td>
                    </tr>
                    </tboby>
            </table><br />";

            //第一種算時間方法
            //$lastDay = strtotime($year.'-12-31');
            //$firstDay = strtotime($year.'-01-01');
            //$day2 = floor(($lastDay-$firstDay) / (60*60*24))+1;

            //第二種算時間方法
            $lastDay = date_create($year.'-12-31');
            $firstDay = date_create($year.'-01-01');
            $countDay = date_diff($firstDay,$lastDay);
            $day = intval($countDay->format(" %a")) +1;
            $dayTest1 = date_format($lastDay,"z") +1;
            $dayTest2 = date_format($lastDay,"L");
            echo '<br />使用$countDay->format()計算，得到：'.$day.'天';

            if($day ==366)
            {
                $YN = "是";
            }
            else
            {
                $YN = "否";
            }
                echo "<table class='indexTable'>
                    <thead class='indexThead'>
                        <tr><td colspan='3'>方法二</td></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>你輸入的年份</td>
                            <td>該年天數</td>
                            <td>是否閏年</td>
                        </tr>
                    <tr>
                        <td>".$year."</td>
                        <td>
                            <p class='redFont'>".$day."天</p>
                        </td>
                        <td>".$YN."</td>
                    </tr>
                    </tboby>
            </table>";
            echo "使用其他函式計算：";
            echo "<br />使用date_format('...','z')計算，得到：".$dayTest1.'天';
            echo "<br />使用date_format('...','L')計算，如果是1即閏，否則平年，得到：".$dayTest2;
    }
    else {
        echo "輸入異常，請輸入數字：1~3000";
    }
}
?>

</body>
</html>
