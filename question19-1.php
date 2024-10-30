<!DOCTYPE html>
<html lang="en">
<head>
  <!--    <script src="js/question8.js?20240923" defer></script>-->
    <?php include "head.php" ?>
  <title>輸入字串，切割之並顯示其 ASCII code</title>
</head>
<body>
<span>輸入字串，切割之並顯示其 ASCII code</span><br />
<span>第一種:
      提供一個輸入框可輸入一串字，利用 PHP 把它們都切割出來成一個字元，並顯示它對應的 ASCII code ，
      且標註是英文大寫 or 英文小寫 or 半形符號 or 其他字元(分辨不出是前三類的就是其他字元)
    </span>
<br />
<br />
請輸入文字：
<br />
<form method='GET' action='question19-1.php'>
  <textarea class='textAreaInput' name='textAreaInput'><?php if (isset($_GET['textAreaInput'])) {
          echo $_GET['textAreaInput'];
      } ?></textarea>
  <input type="submit" value="送出">
</form>
<br />

<?php
if (isset($_GET["textAreaInput"]))
{
    $input = trim($_GET["textAreaInput"]);
    $count = mb_strlen($input);
    //echo mb_substr($input, 5,1);
    for($i=0;$i<$count;$i++)
    {
        if (preg_match("/[\x{4e00}-\x{9fa5}]/u", mb_substr($input, $i,1)))
        {
            //echo $i.'中文'.mb_substr($input, $i,1).'<br>';
            echo "內含中文，中文無ASCII CODE";
            exit;
        }
//        else {
//          echo $i.'英文'.mb_substr($input, $i,1).'<br />';
//        }
    }

    $regexStr = '%^[ -~]+$%';
    //$inputArr = str_split($input);
    $inputArr = preg_split('/(?<!^)(?!$)/u',$input);
    //print_r($inputArr);
    $uppercaseUpBound = 90;
    $uppercaseLowBound = 65;
    $lowcaseUpBound = 122;
    $lowcaseLowBound = 97;
    $halfwidthLowbound = 32;//注意：數字在這個區間
    $halfwidthUpBound = 64;
    $halfwidthOthers = [91,92,93,94,95,96,123,124,125,126];


    echo "空白鍵以'_'，顯示：<br />";
    echo '<table class="indexTable alignCenter">
            <thead>
              <tr>
                <td>&nbsp;流水號&nbsp;</td>
                <td>&nbsp;ASCII CODE&nbsp;</td>
                <td>&nbsp;判別形態&nbsp;</td>
              </tr>
            </thead>';
    for($i=0;$i<count($inputArr);$i++)
    {

        $regex = preg_match($regexStr, $inputArr[$i]);
        $inputASCII = ord($inputArr[$i]);
        if($regex)
        {
          //對應的 ASCII code ，且標註是英文大寫 or 英文小寫 or 半形符號 or 其他字元(分辨不出是前三類的就是其他字元)
          if($inputASCII >= $lowcaseLowBound && $inputASCII <= $lowcaseUpBound)
          {
            $result = '英文小寫';
          }
          elseif($inputASCII >= $uppercaseLowBound && $inputASCII <= $uppercaseUpBound)
          {
            $result = '英文大寫';
          }
          elseif(($inputASCII >= $halfwidthLowbound && $inputASCII <= $halfwidthUpBound)  || isset($inputASCII,$halfwidthOthers))
          {
            $result = '半形符號';
          }
          else
          {
            $result = '其他字元';
          }
          //output
          echo '<tr>';
          echo ($inputArr[$i] == " ")
          ? '<td>'.$inputArr[$i].'</td><td>'.$inputASCII.'</td><td>'.$result.'</td>'
          : '<td>'.$inputArr[$i].'</td><td>'.$inputASCII.'</td><td>'.$result.'</td>' ;
          echo '</tr>';
        }
    }
    echo '</table>';
}
?>


</body>
</html>