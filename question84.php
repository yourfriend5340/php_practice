<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <script src="js/question.js?20240923" defer></script> -->
    <?php include "head.php"?>
    <title>萬年曆</title>
</head>
<body>
<span>輸入日期以輸出萬年歷</span><br />

<br />
<form method='GET' action='question84.php'>
    輸入日期：
    <br />
    <input type='number' name='inputYear' min='1' />年
    <input type='number' name='inputMonth' min='1' max='12' />月
    <input type="submit" value="送出">
</form>
<br />

<?php
//COPY自題目3，閏年判斷
function zumYear($y)
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

if(isset($_GET['inputYear']) && isset($_GET['inputMonth']))
{
    $year = intval($_GET['inputYear']);
    $month = intval($_GET['inputMonth']);

    if($year  === 0 || $month  === 0)
    {
        echo '請輸入完整資料';
        exit;
    }
    //雖然前端有擋，此部份後端也做一個判斷
    if($year < 1 || $month > 12 || $month < 1){
        echo '輸入年份月份有誤';
        exit;
    }

//    //判斷使用者輸的是民國還是西元年，若是民國年加1911至西元年
//    if(($year - 1911) < 0)
//    {
//        $year = $year + 1911;
//    }

    $inputYearAndMonth = $year.'/'.$month;
    $dayList =[
                0 => '日',
                1 => '一',
                2 => '二',
                3 => '三',
                4 => '四',
                5 => '五',
                6 => '六',
              ];
    $bigMonth = [1,3,5,7,8,10,12];
    $smallMonth = [2,4,6,9,11];

    $isZum = zumYear($year);
    $whatDayByMonth = date('N',strtotime($inputYearAndMonth.'/01'));//該月的第一天星期幾
    echo "你輸入的資料為：".$year."年".$month."月，該月的1號為星期".$dayList[$whatDayByMonth % 7]."<br />";
    echo (($isZum === 0)? '該年為平年' : '該年為閏年').'<br />';

    //判斷某月有幾天
    if($isZum === 1 && $month === 2)
    {
      $day = 29;
    }
    elseif($isZum ==0 && $month === 2)
    {
      $day = 28;
    }
    elseif(in_array($month, $bigMonth))
    {
      $day = 31;
    }
    elseif(in_array($month, $smallMonth))
    {
      $day = 30;
    }

    $innerHtml = "
    <table class='indexTable alignCenter fontBigSize'>
      <thead class='indexThead'>
        <tr>";

    for($i=0;$i<=6;$i++)
    {
      $innerHtml .= "<th>".$dayList[$i]."</th>";
    }

    $innerHtml .= "</tr>
      </thead>
      <tbody>
         <tr>";
        //以下兩變數組合意義為，第m列的第n個位置
        $tableIndex = 1;
        $line = 1;

        //在第一列時決定要補多少個td，當每月第一天是星期日時，不用補
        if(!(($whatDayByMonth % 7) === 0))
        {
            for ($j = 0; $j < ($whatDayByMonth); $j++)
            {
                $innerHtml .= "<td></td>";
                $tableIndex++;
            }
        }
        //補完td後，開始寫入資料
        for($z=1;$z<=$day;$z++)
        {
          $innerHtml .= "<td id='day".$z."'>".$z."</td>";
          $tableIndex++;

          if(($tableIndex % 7) == 1)
          {
            $tableIndex = 1;
            $innerHtml .= "</tr><tr>";
          }
        }
        //寫完後補td
        for($z=$tableIndex;$z<=7;$z++)
        {
          $innerHtml .= "<td></td>";
        }


    $innerHtml .= "
         </tr>
      </tbody>
    </table>  
    ";

    echo $innerHtml;
}

?>

</body>
</html>
