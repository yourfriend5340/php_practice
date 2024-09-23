<!DOCTYPE html>
<html lang="en">
<head>
    <script src="js/question47.js?20240923" defer></script>
    <?php include "head.php"?>
    <title>九九乘法表</title>
</head>
<body>
    <span>九九乘法表-本例概念</span>
    <table class='question47Maintable'>
        <thead>
            <tr>
                <td>輸出階層 / 餘數</td>
                <td>1</td>
                <td>2</td>
                <td>0</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>0</td>
                <td>0/1</td>
                <td>0/2</td>
                <td>0/0</td>
            </tr>
            <tr>
                <td>1</td>
                <td>1/1</td>
                <td>1/2</td>
                <td>1/0</td>
            </tr>
                <tr>
                <td>2</td>
                <td>2/1</td>
                <td>2/2</td>
                <td>2/0</td>
            </tr>
            <tr>
                <td>…</td>
                <td>…/1</td>
                <td>…/2</td>
                <td>…/0</td>
            </tr>

        </tbody>
    </table>

    <p> 程式判斷邏輯為：</p>
    <p>ex：因每一列有三格，想輸出1~6的乘法表，印4時(即要輸出的第4個數字，非指4本身值)的位置輸出位置為：
        4除以3，得到餘為1，在餘為1的狀況時，會印出一個tr標籤做換行 
    </p>
    <hr>
    <form class="form1" action="question47.php" method="GET">
    <table class="question47Input">
        <tbody>
            <tr>
                <td>請輸入想顯示的數字：
                    <input type="text" name="47input" id="47input"  placeholder="ex：1,2,3,4~7">
                    <input type="submit" value="輸入">
                    <span id="popup"></span>
                </td>
            </tr>
        </tbody>
    </table>
    </form>

    <?php
    $tempArr=[];
    if(isset($_GET['47input']))
    {
        $getstr = $_GET['47input'];
        $getstr = rtrim($getstr,',');
        $getstr = rtrim($getstr,'~');
        //字串處理，以逗號判斷，切開字串存入array
        $inputArr=explode(",",$getstr);

        //處理碰到符號 " ~ "時，補回所需的字串
        for ($i=0;$i<count($inputArr);$i++)
        {
            $check = strpos($inputArr[$i],'~');
            //無帶有~號的字串，存入array
            if($check === false)
            {
                array_push ($tempArr,$inputArr[$i]);
            }
            //帶有~號的字串，補回中間省略字串
            else
            {
                $temp2Arr = explode('~',$inputArr[$i]);
                if($temp2Arr[1] > $temp2Arr[0])
                {
                    $counter = $temp2Arr[1] - $temp2Arr[0];
                    $smallest = $temp2Arr[0];
                }
                else
                {
                    $counter = $temp2Arr[0]-$temp2Arr[1];
                    $smallest = $temp2Arr[1];
                }
                for($j=0;$j<=$counter;$j++)
                {
                    array_push($tempArr, ($smallest + $j));
                }
            }
        } 
        
        //將處理完的字串做sort後，儲存字串處理結果
        sort($tempArr);
        $inputNumArr = $tempArr;
        //$inputNumArr = [1,2,3,4,5,6,7,8,9];
        
        $Arr_count = count($inputNumArr);

        echo "<table class='question47SubTable'>
                <thead>
                    <tr>
                        <td colspan='3'>九九乘法 output</td>
                    </tr>
                </thead>
                <tbody>";
        for ($i=1;$i<=$Arr_count;$i++)
        {
            $quo = $i / 3;//quotient商數，quo簡寫
            $rem = $i % 3;//remainder餘數，rem採簡寫        
            
            if($rem == 1)
            {
                echo "<tr>";
            }
            
            echo "<td><table class='qustion47Sub2Table'><tdoby>";
            for($j=1;$j<=9;$j++)
            {   
                echo "<tr>
                        <td class='alignStart'>".$inputNumArr[$i-1]." X ".$j."</td>".
                        "<td class='alignStart'> &nbsp; = &nbsp; </td>".
                        "<td class='alignEnd'>".$inputNumArr[$i-1] * $j."</td>
                    </tr>";
            }
            echo "</tbody></table></td>";

            //在最後一次$i迴圈時，計算空白處要補多少td
            if($i==$Arr_count){
                //例如，有16個數字，%3之後可得1。3-1=2，知道要補2個td，但整除不補td
                if (($Arr_count % 3) != 0)
                {
                    $needtd = 3 -($Arr_count % 3);
                }
                else
                {
                    $needtd = 0;
                }
                for($z=1;$z<=$needtd;$z++)
                {
                    echo "<td></td>";
                }
            }
            if($rem == 0)
            {
                echo "</tr>";
            }

        }
        echo "</tdoby></table>";
    }
    
?>

</body>
</html>


