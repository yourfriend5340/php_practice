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
        $input = $_GET["textAreaInput"];

        $replaceWord = str_replace( ' ','',$input);
        $wordArea = "<textarea class='textAreaInput' name='textAreaInput'>".$replaceWord."</textarea>";
    }
    else
    {
        $wordArea = "<textarea class='textAreaInput' name='textAreaInput'></textarea>";
    }
    $outputHtml .= $wordArea."
          <input type='submit' value='送出'>
          </form>
          <br />
    ";

    echo $outputHtml;
    echo "</body></html>";
?>


