<!DOCTYPE html>
<html lang="en">
<head>
    <script src="js/question.js?20240923" defer></script>
    <?php include "head.php"?>
    <title></title>
</head>
<body>
    <span>輸入1~256的數字判斷階層</span><br />
    <span>版本二: 用php把十進位轉二進位，再切字串計算</span><br />
    <br />
    請輸入數字：
    <br />
    <form method='GET' action='question96-2.php'>
    <input class='input' name='textAreaInput' value='<?php if(isset($_GET['textAreaInput'])){echo htmlspecialchars($_GET['textAreaInput'],ENT_QUOTES);}?>' />
    <input type="submit" value="送出">
    </form>
    <br />

<?php
    if(isset($_GET["textAreaInput"]))
    {
        $input = $_GET["textAreaInput"];        
        $inputToBin = decbin($input);

        $regrex = preg_match("/^(1\d{2}|2[0-4][0-9]|25[0-6]|[1-9][0-9]|[0-9])$/",$input);
        if(!$regrex)
        {
            echo "<span id='pupup' class='red'>請輸入1~256數字</span><br />";
        }
        else
        {
            echo "<span id='pupup2'>計算出來的結果是：".$inputToBin."</span><br />";
            echo "<span id='popup3'> 1 的個數有：".substr_count($inputToBin,1)." 個</span><br />";
            echo "<span id='popup4'> 0 的個數有：".substr_count($inputToBin,0)." 個</span><br />";
        }
    }
?>


</body>
</html>