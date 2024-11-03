<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <script src="js/question8.js?20240923" defer></script> -->
    <?php include "head.php"?>
    <title>計算字元</title>
</head>
<body>
    <span>/*74.設計一程式計算一文字檔內的字元個數。*/</span><br />
    <span>版本三: 限制 textarea 輸入上限為 100 個字，送出後 PHP 驗證超過字數就跳警告</span><br />
    <br />
    請輸入文字：
    <br />
    <form method='GET' action='question74-3.php'>
    <textarea class='textAreaInput' name='textAreaInput'><?php if(isset($_GET['textAreaInput'])){echo htmlspecialchars($_GET['textAreaInput'],ENT_QUOTES);}?></textarea>
    <input type="submit" value="送出">
    </form>
    <span id=popup></span>
    <br />

<?php
    if(isset($_GET["textAreaInput"]))
    {
        $input = trim($_GET["textAreaInput"]);
        $changeLine = substr_count($input,"\r\n");
        if(((mb_strlen($input)) - ($changeLine * 2)) > 100)
        {

            echo "<span id='popup1'>計算出來的結果是：".(mb_strlen($input)) - ($changeLine * 2)."個字串長度, 長度超過100個字</span><br />";
        }
        else 
        {
            echo "<span id='popup3'>計算出來的結果是：".((mb_strlen($input)) - ($changeLine * 2))."個字串長度</span><br />";
        }

    }


?>


</body>
</html>