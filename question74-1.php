<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <script src="js/question8.js?20240923" defer></script> -->
    <?php include "head.php"?>
    <title>計算字元</title>
</head>
<body>
    <span>/*74.設計一程式計算一文字檔內的字元個數。*/</span><br />
    <span>版本一: 給予一個 textarea，貼上後送出用 PHP 計算有幾個字</span><br />
    <br />
    請輸入文字：
    <br />
    <form method='GET' action='question74-1.php'>
    <textarea class='textAreaInput' name='textAreaInput'><?php if(isset($_GET['textAreaInput'])){echo htmlspecialchars($_GET['textAreaInput'],ENT_QUOTES);}?></textarea>
    <input type="submit" value="送出">
    </form>
    <br />

<?php
    if(isset($_GET["textAreaInput"]))
    {
        $input = trim($_GET["textAreaInput"]);
        $changeLine = substr_count($input,"\r\n");
        echo $input.'<br />';
        echo "<span id=''pupup>有找到換行，共有：".$changeLine." 個(不計算在長度內)</span><br />";
        echo "<span id='pupup0'>有找到空白字元，共有：".substr_count($input,' ')." 個</span><br />";
        echo "<span id='pupup'>計算出來的結果是：".strlen($input)-($changeLine * 4)." 個字元長度</span><br />";
        echo "<span id='pupup2'>計算出來的結果是：".mb_strlen($input)." 個字串長度</span><br />";
    }
?>


</body>
</html>