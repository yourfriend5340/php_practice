<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js?202408141037"
         integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous">
    </script>
    <script src="./JS/question27.js" defer></script>
    <link rel="stylesheet" href="./CSS/index.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>判斷閏年</title>
</head>
<body>
    <span>判斷閏年</span>
    <form class="form1" action="question27.php" method="GET">
        <table class="question3">
            <tbody>
                <tr>
                    <td>
                        請輸入一個年份(1~3000)：
                        <input type="text" id="input" name="input" maxlength="8">
                        <input type="submit" value="輸入">
                        <lable id="popup"></lable>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>

<?php
if(isset($_GET['input']))
{
    $year = $_GET['input'];
    if($year <= 3000 && $year >= 1)
    {
            if ($year % 400 == 0)
            {
                $result = true;  //閏年
            }
            else if ($year%100 == 0)
            {
                $result = false; //平年
            }
            else if ($year%4 == 0)
            {
                $result = true;  //閏年
            }
            else
            {
                $result = false; //平年
            }
            
            if($result == true)
            {
                $day = 366;
                $YN = "是";
            }
            else
            {
                $day = 365;
                $YN = "否";
            }
            echo "<table border='1'>
                    <thead>
                        <tr><td>方法一</td></tr>
                        <tr>
                            <td>你輸入的年份</td>
                            <td>該年天數</td>
                            <td>是否閏年</td>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>".$year."</td>
                        <td>
                            <font class='red_font'>".$day."天</font>
                        </td>
                        <td>".$YN."</td>
                    </tr>
                    </tboby>
            </table>";


            $lastDay = strtotime($year.'-12-31');
            $firstDay = strtotime($year.'-01-01');
            $day2 = floor(($lastDay-$firstDay) / (60*60*24))+1;
            if($day ==366)
            {
                $YN = "是";
            }
            else
            {
                $YN = "否";
            }
                echo "<table border='1'>
                    <thead>
                        <tr><td>方法二</td></tr>
                        <tr>
                            <td>你輸入的年份</td>
                            <td>該年天數</td>
                            <td>是否閏年</td>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>".$year."</td>
                        <td>
                            <font class='red_font'>".$day2."天</font>
                        </td>
                        <td>".$YN."</td>
                    </tr>
                    </tboby>
            </table>";
    }
    else {
        echo "你輸入的值不是1~3000";
    }
}
?>