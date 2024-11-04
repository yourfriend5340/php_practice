<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <script src="js/question.js?20240923" defer></script> -->
    <?php include "head.php"?>
    <title></title>
</head>
<body>
<span>輸入生日判斷</span><br />
<span>輸入生日(年/月/日)，可西元年也可民國年，送出表單用 PHP 顯示"實歲"歲數與星座與預估生肖</span><br />

<table class='indexTable'>
    <thead>
    <tr>
        <td>星座</td><td>日期</td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>摩羯座</td><td>12/22~1/19</td>
    </tr>
    <tr>
        <td>水瓶座</td><td>1/20~2/18</td>
    </tr>
    <tr>
        <td>雙魚座</td><td>2/19~3/20</td>
    </tr>
    <tr>
        <td>白羊座</td><td>3/21~4/19</td>
    </tr>
    <tr>
        <td>金牛座</td><td>4/20~5/20</td>
    </tr>
    <tr>
        <td>雙子座</td><td>5/21~6/21</td>
    </tr>
    <tr>
        <td>巨蟹座</td><td>6/22~7/22</td>
    </tr>
    <tr>
        <td>獅子座</td><td>7/23~8/22</td>
    </tr>
    <tr>
        <td>處女座</td><td>8/23~9/22</td>
    </tr>
    <tr>
        <td>天秤座</td><td>9/23~10/23</td>
    </tr>
    <tr>
        <td>天蠍座</td><td>10-24~11/22</td>
    </tr>
    <tr>
        <td>射手座</td><td>11/23~12/21</td>
    </tr>
    </tbody>
</table>
<br />


<br />
<form method='GET' action='question33-1.php'>
    <!-- 請選擇生日：
    <input type='date' class='input' name='input' value='<?php if(isset($_GET['input'])){echo $_GET['input'];}?>' /> -->
    <br /><br />
    輸入生日：
    <br />
    <input type='number' name='inputYear' min='1' />年
    <input type='number' name='inputMonth' min='1' max='12' />月
    <input type='number' name='inputDay' min='1' max='31' />日
    <input type="submit" value="送出">
</form>
<br />

<?php
$starStart = [
    12 => '12/22',
    1 => '1/20',
    2 => '2/19',
    3 => '3/21',
    4 => '4/20',
    5 => '5/21',
    6 => '6/22',
    7 => '7/23',
    8 => '8/23',
    9 => '9/23',
    10 => '10/24',
    11 => '11/23',
];
$starEnd = [
    12 => '1/19',
    1 => '2/18',
    2 => '3/20',
    3 => '4/19',
    4 => '5/20',
    5 => '6/21',
    6 => '7/22',
    7 => '8/22',
    8 => '9/22',
    9 => '10/23',
    10 => '11/22',
    11 => '12/21',
];

$starList = [
    12 => '摩羯座',
    1 => '水瓶座',
    2 => '雙魚座',
    3 => '白羊座',
    4 => '金牛座',
    5 => '雙子座',
    6 => '巨蟹座',
    7 => '獅子座',
    8 => '處女座',
    9 => '天秤座',
    10 => '天蠍座',
    11 => '射手座',
];
//date 版
// if(isset($_GET['input']))
// {
//     $birthday = trim($_GET['input']);
//     //echo $date;

//     $year = intval(substr($birthday,0,4));
//     $date = substr($birthday,5,6);
//     $nowYear = intval(date('Y'));
//     $now = date('Y-m-d h:s:i');
//     echo '你的生日：'.$year.'-'.$date.'<br />';
//     echo '今天日期：'.$now.'<br />';
//     echo '你的實歲為：'.$nowYear-$year.' 歲<br />';
//     $resultSecond = (strtotime($now)-strtotime($birthday));
//     echo '精準年紀為：'.floor($resultSecond / 60 / 60 / 24 / 365).'歲';
//     $remainSecond = $resultSecond - (floor($resultSecond / 60 / 60 / 24 / 365) * 31536000);
//     echo floor($remainSecond / 60 / 60 / 24 /30 ).'月';
//     exit;
// }

//COPY自題目3
function YearYn($y)
{
    $year = intval($y);
    //如intval failure時return 0，會過不了$year >=1，因此不再加長判斷

    if($year <= 3000 && $year >= 1)
    {
        if ($year % 4 === 0  )
        {
            if($year % 100 === 0)
            {
                if($year % 400 === 0)
                {
                    $result = 1; //閏年
                }
                else
                {
                    $result = 0;
                }
            }
            else{
                $result = 1;
            }
        }
        else
        {
            $result = 0; //平年
        }
    }
    return $result;
};

if(isset($_GET['inputYear']) && isset($_GET['inputMonth']) && isset($_GET['inputDay']))
{
    $year = intval($_GET['inputYear']);
    $month = intval($_GET['inputMonth']);
    $day = intval($_GET['inputDay']);

    if($year ==0 || $month ==0 || $day==0)
    {
        echo '請輸入完整資料';
        exit;
    }

    $monthList = [1,3,4,5,6,7,8,9,10,11,12];
    $monthDay = [31,31,30,31,30,31,31,30,31,30,31];

    //判斷日期是否正確，1閏年0平年
    $checkYear = YearYN($year);
    if($checkYear ==1 && $month==2 && $day >=29)
    {
        echo '輸入日期有誤';
        exit;
    }
    elseif($checkYear == 0 && $month == 2 && $day >= 28)
    {
        echo '輸入日期有誤';
        exit;
    }

    if($month !=2){
        for($i=0;$i<=10;$i++){
            if($monthList[$i] == $month)
            {
                if($day > $monthDay[$i])
                {
                    echo '輸入日期有誤';
                    exit;
                }
            }
        }
    }
    if(($year - 1911) > 0)
    {
        $thisYear = date('Y');
    }
    else{
        $thisYear = date('Y')-1911;
    }
    $old = $thisYear - $year;

    $dateStr = $month.'/'.$day;

    for($i=1;$i<=11;$i++)
    {
        $starIndex = 12;
        if(strtotime($dateStr) >= strtotime($starStart[$i]) && strtotime($dateStr) <= strtotime($starEnd[$i]))
        {
            $starIndex = $i;
            break;
        }
    }
    //echo strtotime($dateStr);
    echo '你今年：'.$old.'歲，星座為：'.$starList[$starIndex];

}

?>

</body>
</html>
