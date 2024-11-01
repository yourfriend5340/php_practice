<?php
if(isset($_POST['submit']))
{
    $mergeFileRoute = "./temp/mergeFile".date('Ymdhsi').".txt";
    $file1Route = $_FILES['94input1']['tmp_name'];
    $file2Route = $_FILES['94input2']['tmp_name'];

    if ($file1Route == '' || $file2Route == '')
    {
        echo '請務必確實選擇兩個檔案';
        exit;
    }

    //file是實際存放在你硬碟中要被下載的檔案，可使用變數。
    $openMerge = fopen($mergeFileRoute, "w");
    $file1 = file($file1Route);
    $file1LineCount = count($file1);
    for($i = 0; $i < $file1LineCount; $i++)
    {
        fwrite($openMerge, $file1[$i]);
    }
    fwrite($openMerge, "\n");

    $file2 = file($file2Route);
    $file2LineCount = count($file2);
    for($i = 0; $i < $file2LineCount; $i++)
    {
        fwrite($openMerge, $file2[$i]);
    }
    fclose($openMerge);

    header("Content-type:application");
    header("Content-Disposition: attachment; filename=merge.txt");
    //file_name是預設下載時的檔名，可使用變數。
    readfile($mergeFileRoute);
    unlink($mergeFileRoute);//將檔案刪除
    exit;
}