<!DOCTYPE html>
<html lang="en">
<head>
    <script src="js/question96-3.js?20240923" defer></script>
    <?php include "head.php"?>
    <title></title>
</head>
<body>
    <span>輸入1~256的數字判斷階層</span><br />
    <span>版本三：用js寫把10進位開始除2的遞迴，計算階層及餘數</span><br />
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