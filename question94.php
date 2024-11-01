<?php
         echo  "
            <!DOCTYPE html>
            <html lang='en'>
            <head>
            <!--    <script src='js/question29.js?20240923' defer></script>-->
                <?php include 'head.php'?>
                <title>檔案上傳</title>
            </head>
            <body>
                <span>txt檔案上傳並合併</span>
                <hr>
                <form class='form1' enctype='multipart/form-data' action='question94_post.php' method='POST'>
                <table class='question29Input'>
                    <tbody>
                        <tr>
                            <td>請選擇上傳txt檔：<br /><br />
                                <input type='file' name='94input1' id='94input1'  placeholder='請選擇第一個txt檔'><br /><br />
                                <input type='file' name='94input2' id='94input2'  placeholder='請選擇第二個txt檔'><br /><br />
                                <input type='submit' name='submit' value='上傳'><br />
                                <span id='popup'></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </form>
            </body>
            </html>";
?>



