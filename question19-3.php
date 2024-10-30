<!DOCTYPE html>
<html lang="en">
<head>
  <!--    <script src="js/question8.js?20240923" defer></script>-->
    <?php include "head.php" ?>
  <title>輸入字串，切割之並顯示其 ASCII code</title>
</head>
<body>
<span>輸入字串，切割之並顯示其 ASCII code</span><br />
<span>第三種:
  與第二種要求一樣，只可輸入大寫英文，可利用 html5 的 input pattern屬性 (關鍵字可查html input regex)限制使用者只能輸入大寫英文
  <br />備註: 使用較新的功能最好要查 can i use https://caniuse.com/ 確認可支援的瀏覽器範圍 (google 直接打 can i use input pattern)
</span>
<br />
<br />
請輸入文字：
<br />
<form method='GET' action='question19-3.php'>
  <input class='input' name='textAreaInput' pattern="^[A-Z]+$" value="<?php if (isset($_GET['textAreaInput'])){echo $_GET['textAreaInput'];} ?>" />
  <input type="submit" value="送出">
</form>
<br />

<?php
if (isset($_GET["textAreaInput"]))
{
    $input = $_GET["textAreaInput"];
    echo $input.'<br />';

}
?>


</body>
</html>