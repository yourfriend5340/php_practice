<?php
    include "head.php";
    $outputHtml = "
    <!DOCTYPE html>
    <html lang='en'>
      <head>
      <!--    <script src='js/question8.js?20240923' defer></script>-->

          <title>計算字元</title>
      </head>
      <body>
          <span>/*97.輸入一字串，它會從字串中刪除空白字元並顯示結果*/</span><br />
          <span>版本一: </span><br />
          <br />
          請輸入文字：
          <br />
          <form method='GET' action='question97-1.php'>";

    if(isset($_GET["textAreaInput"]))
    {
        $input = trim($_GET["textAreaInput"]);
        $replaceWord = str_replace( ' ','',$input);
        $replaceWord = str_replace("\r\n",'',$replaceWord);
        $replaceWord = htmlspecialchars($replaceWord,ENT_QUOTES);
        $wordArea = "<textarea class='textAreaInput' name='textAreaInput' placeholder='請輸入文字'>".$replaceWord."</textarea>";
    }
    else
    {
        $wordArea = "<textarea class='textAreaInput' name='textAreaInput' placeholder='請輸入文字'></textarea>";
    }
    $outputHtml .= $wordArea."
          <input type='submit' value='送出'>
          </form>
    ";

    echo $outputHtml;
    echo "</body></html>";
?>


