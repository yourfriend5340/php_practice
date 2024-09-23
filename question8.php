<!DOCTYPE html>
<html lang="en">
<head>
    <script src="./JS/question8.js" defer></script>
    <?php include "head.php"?>
    <title>華氏攝氏換算</title>
</head>
<body>
    <span>溫度換算計算機</span>
    <table>
        <tr>
            <td><p>請輸入華氏度：</p></td>
            <td>轉換方向</td>
            <td><p>請輸入攝氏度：</p></td>
        </tr>
        <tr>
            <td><input type = "text" id = "fahrenheit" maxlength = "8" /></td>
            <td>
                <button id = "celTofah"> ← </button>
                <button id = "fahTocel"> → </button>
            </td>
            <td>
                <input type = "text" id = "celsius" maxlength = "8">
            </td>
        </tr>
        </table>
        <label id="pupup"></label>    
</body>
</html>
