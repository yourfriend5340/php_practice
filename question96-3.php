<!DOCTYPE html>
<html lang="en">
<head>
    <script src="js/question96-3.js?20240923" defer></script>
    <?php include "head.php"?>
    <title></title>
</head>
<body>
    <span>輸入1~256的數字判斷階層</span><br />
    <span>版本一: 用php除以2的遞迴計算階層跟餘數</span><br />
    <br />
    請輸入數字：
    <br />
    <input class='input' name='textAreaInput' value='<?php if(isset($_GET['textAreaInput'])){echo $_GET['textAreaInput'];}?>' />
    <br />
    <span id='popup'></span>
</body>
</html>