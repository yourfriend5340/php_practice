<!DOCTYPE html>
<html lang="en">
<head>
    <script src="js/question96-4.js?20240923" defer></script>
    <?php include "head.php"?>
    <title></title>
</head>
<body>
    <span>輸入1~256的數字判斷階層</span><br />
    <span>版本四: 用 JS 寫，用 toString(2) 把 10 進位轉 2 進位，再切割字串計算</span><br />
    <br />
    請輸入數字：
    <br />
    <input class='input' name='textAreaInput' value='<?php if(isset($_GET['textAreaInput'])){echo htmlspecialchars($_GET['textAreaInput'],ENT_QUOTES);}?>' />
    <br />
    <span id='popup'></span><br />
    <span id='popup2'></span><br />
    <span id='popup3'></span><br />
</body>
</html>