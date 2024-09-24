<!DOCTYPE html>
<html lang="en">
<head>
    <script src="js/question8.js?20240923" defer></script>
    <?php include "head.php"?>
    <title>華氏攝氏換算</title>
</head>
<body>
    <span>溫度換算計算機</span>
    <table class="indexTable">
        <thead class="indexThead">
        <tr>
            <td><p>請輸入華氏度：</p></td>
            <td><h3>轉換方向</h3></td>
            <td><p>請輸入攝氏度：</p></td>
        </tr>
        </thead>
        <tr>
            <td><input type = "text" id = "fahrenheit" maxlength = "8" /></td>
            <td class="alignCenter">
                <button id = "celTofah" class="question8Button"> ← </button>
                <button id = "fahTocel" class="question8Button"> → </button>
            </td>
            <td>
                <input type = "text" id = "celsius" maxlength = "8">
            </td>
        </tr>
        </table>
        <span id="pupup"></span>
</body>
</html>
