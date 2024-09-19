<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js?202408141037"
         integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous">
    </script>
    <script src="./JS/question8.js" defer></script>
    <link rel="stylesheet" href="./CSS/index.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>華氏攝氏換算</title>
</head>
<body>
    <span>溫度換算計算機</span>
    <table border = "1">
        <tr>
            <td><font>請輸入華氏度：</font></td>
            <td>轉換方向</td>
            <td><font>請輸入攝氏度：</font></td>
        </tr>
        <tr>
            <td><input type = "text" id = "fahrenheit" maxlength = "8"></td>
            <td>
                <button id = "celTofah"> ← </button>
                <button id = "fahTocel"> → </button>
            </td>
            <td>
                <input type = "text" id = "celsius" maxlength = "8">
            </td>
        </tr>
        </table>
        <lable id="pupup"></lable>    
</body>
</html>
