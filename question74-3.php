<!DOCTYPE html>
<html lang="en">
<head>
    <script src="js/question8.js?20240923" defer></script>
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
    <textarea row='3' col='3' class='textAreaInput' name='textAreaInput'><?php if(isset($_GET['textAreaInput'])){echo $_GET['textAreaInput'];}?></textarea>
    <input type="submit" value="送出">
    </form>
    <span id=popup></span>
    <br />

<?php
    if(isset($_GET["textAreaInput"]))
    {
        $input = $_GET["textAreaInput"];
        if(strlen($input) > 100)
        {
            echo "<span id='popup'>計算出來的結果是：".mb_strlen($input)."個字串長度, 長度超過100個字</span><br />";
            echo "<span id='popup3'>超過字元範圍為：".substr($input,100,strlen($input))."</span><br />";
        }
        else 
        {
            echo "<span id='popup'>計算出來的結果是：".mb_strlen($input)."個字串長度</span><br />";
        }
        echo "<span id='popup2'>計算出來的結果是：".strlen($input)."個字元長度</span><br />";
        //echo "<span id='pupup2'>計算出來的結果是：".mb_strlen($input)."個字串長度</span><br />";
    }


?>


</body>
</html>