<!DOCTYPE html>
<html lang="en">
<head>
      <script src="js/question19-4.js?20240923" defer></script>
    <?php include "head.php"?>
  <title>輸入字串，切割之並顯示其 ASCII code</title>
</head>
<body>
<span>輸入字串，切割之並顯示其 ASCII code</span><br />
<span>第四種:
提供一個輸入框，僅可輸入大寫與"小寫"英文字母，當輸入小寫英文就自動取代成大寫英文(最後結果一率都為大寫英文)
</span>
<br />
<br />
請輸入文字：
<br />
<form method='GET' action='question19-4.php'>
  <textarea class='textAreaInput' name='textAreaInput'><?php if(isset($_GET['textAreaInput'])){echo $_GET['textAreaInput'];}?></textarea>
<!--  <input type="submit" value="送出">-->
</form>
<br />
<span id='popup'></span><br />
<spsn id='popup2'></spsn>

</body>
</html>