<!DOCTYPE html>
<html lang="en">
<head>
    <script src="js/question47.js?20240923" defer></script>
    <?php include "head.php"?>
    <title>九九乘法表</title>
</head>
<body class="indexBody">
    <span>九九乘法表-本例概念</span>
    <table class='indexTable'>
        <thead class="indexThead">
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

    <?php
        $inputNumArr = [1,2,3,4,5,6,7,8,9];
        
        $Arr_count = count($inputNumArr);
        $counter = 0;
        echo "<table class='question47-1SubTable'>
                <thead>
                        <th class='indexThead' colspan='3'>九九乘法 output</th>  
                </thead>
                <tbody>";
        for ($i=$Arr_count;$i>=1;$i--)
        {
            $counter++;
            $quo = $counter / 3;//quotient商數，quo簡寫
            $rem = $counter % 3;//remainder餘數，rem採簡寫        
            
            if($rem == 1)
            {
                echo "<tr>";
            }

            echo "<td><table class='question47-1Sub2Table'><tdoby>";

            for($j=9;$j>=1;$j--)
            {
                $outputValue = $inputNumArr[$i-1] * $j;

                echo "<tr>
                        <td class='alignStart'> ".$inputNumArr[$i-1]."</td><td> X </td><td>".$j."</td>".
                        "<td class='alignStart'> &nbsp; = &nbsp; </td>".
                        "<td class='alignEnd'>".$outputValue."</td>
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
?>

</body>
</html>


