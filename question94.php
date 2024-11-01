<!DOCTYPE html>
<html lang="en">
<head>
<!--    <script src="js/question29.js?20240923" defer></script>-->
    <?php include "head.php"?>
    <title>檔案上傳</title>
</head>
<body>
    <span>txt檔案上傳並合併</span>
    <hr>
    <form class="form1" enctype="multipart/form-data" action="question94.php" method="POST">
    <table class="question29Input">
        <tbody>
            <tr>
                <td>請選擇上傳txt檔：<br /><br />
                    <input type="file" name="94input1" id="94input1"  placeholder="請選擇第一個txt檔" value='
                    <?php if(isset($_FILES['94input1']['name'])){ echo $_FILES['94input1']['name'];}?>'><br /><br />
                    <input type="file" name="94input2" id="94input2"  placeholder="請選擇第二個txt檔" value='
                    <?php if(isset($_FILES['94input2']['name'])){ echo $_FILES['94input1']['name'];}?>'><br /><br />
                    <input type="submit" name='submit' value="上傳"><br />
                    <span id="popup"></span>
                </td>
            </tr>
        </tbody>
    </table>
    </form>

    <?php
    if(isset($_POST['submit'])){

          $mergeFileRoute = "./temp/mergeFile".date('Ymdhsi').".txt";
          $file1Route= $_FILES['94input1']['tmp_name'];
          $file2Route= $_FILES['94input2']['tmp_name'];

          if($file1Route == '' || $file2Route == ''){
            echo '請務必確實選擇兩個檔案';
            exit;
          }

          $openMerge = fopen($mergeFileRoute, "w");
          $file1 = file($file1Route);
          fwrite($openMerge, $file1[0]);

          $file2 = file($file2Route);
          fwrite($openMerge, $file2[0]);
          fclose($openMerge);

          //unlink($mergeFileRoute);//將檔案刪除
          echo '已上傳檔案';
    }
?>

</body>
</html>


