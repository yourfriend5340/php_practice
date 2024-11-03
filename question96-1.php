<!DOCTYPE html>
<html lang="en">
<head>
    <script src="js/question.js?20240923" defer></script>
    <?php include "head.php"?>
    <title></title>
</head>
<body>
    <span>輸入1~256的數字判斷階層</span><br />
    <span>版本一: 用php除以2的遞迴計算階層跟餘數</span><br />
    <br />
    請輸入數字：
    <br />
    <form method='GET' action='question96-1.php'>
    <input class='input' name='textAreaInput' value='<?php if(isset($_GET['textAreaInput'])){echo htmlspecialchars($_GET['textAreaInput'],ENT_QUOTES);}?>' />
    <input type="submit" value="送出">
    </form>
    <br />

<?php
    function DectoBin($decimal)
    {
        bcscale(0);
        $binary = '';
        $count1 = 0;
        do
        {
            $binary = bcmod($decimal,'2') . $binary;
            $decimal = bcdiv($decimal,'2');

        } while (bccomp($decimal,'0'));

        return($binary);
    }

    if(isset($_GET["textAreaInput"]))
    {
        $input = $_GET["textAreaInput"];        

        $regrex = preg_match("/^(1\d{2}|2[0-4]\d|25[0-6]|[1-9]\d|\d)$/",$input);
        if(!$regrex)
        {
            echo "<span id='pupup' class='red'>請輸入1~256數字</span><br />";
        }
        else
        {
            $result = DectoBin($input);
            echo "<span id='pupup2'>計算出來的結果是：".$result."</span><br />";
            echo "<span id='pupup3'>1的個數有：".substr_count($result,1)." 個</span><br />";
            echo "<span id='pupup4'>0的個數有：".substr_count($result,0)." 個</span><br />";
        }
    }
?>


</body>
</html>