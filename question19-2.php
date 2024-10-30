<!DOCTYPE html>
<html lang="en">
<head>
    <script src="js/question19-2.js?20240923" defer></script>
    <?php include "head.php" ?>
  <title>輸入字串，切割之並顯示其 ASCII code</title>
</head>
<body>
<span>輸入字串，切割之並顯示其 ASCII code</span><br />
<span>第二種:
提供一個輸入框，僅可輸入大寫英文字母，利用 JQuery 判斷，"按鍵當下"不是大寫英文，就不給輸入
    </span>
<br />
<br />
請輸入文字：
<br />
<form method='GET' action='question19-2.php'>
  <textarea class='textAreaInput' name='textAreaInput'><?php if (isset($_GET['textAreaInput']))
      {
          echo $_GET['textAreaInput'];
      } ?></textarea>
<!--  <input type="submit" value="送出">-->
</form>
<br />
<span id='popup'></span><br />
<span id='popup2'</span>

</body>
</html>