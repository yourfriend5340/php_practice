<!DOCTYPE html>
<html lang="en">
<head>
  <script src="js/question97-2.js?20240923" defer></script>
    <?php include "head.php"?>
  <title>計算字元</title>
</head>
<body>
<span>/*97.輸入一字串，它會從字串中刪除空白字元並顯示結果*/</span><br />
<span>版本2: 給予一個輸入框，onblur 後用 JQuery 清除字串裡所有的空格，然後取代原本輸入框內的值，並提示"字串已更動"</span><br />
<br />
輸入區：請輸入文字(空值不予回應，輸入後請移開滑鼠並點一下左鍵)
<br />
<textarea class='textAreaInput' id='textAreaInput' placeholder='請輸入文字'></textarea>
<br />
<hr>
<br />

結果區：
<span id='popup0'></span><br />
textarea ver.<br />
<textarea class='textAreaInput' id='textAreaOutput0'></textarea><br />
pre ver.
<pre class='textAreaInput' id='preOutput0'></pre>
<br /><hr><br />

<span id='popup1'></span><br />
textarea ver.<br />
<textarea class='textAreaInput' id='textAreaOutput1'></textarea><br />
pre ver.
<pre class='textAreaInput' id='preOutput1'></pre>
<br /><hr><br />

<span id='popup2'></span><br />
textarea ver.<br />
<textarea class='textAreaInput' id='textAreaOutput2'></textarea><br />
pre ver.
<pre class='textAreaInput' id='preOutput2'></pre>

</html>