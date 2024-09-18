<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js?202408141037"
         integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous">
    </script>
    <script src="./JS/question34.js" defer></script>
    <link rel="stylesheet" href="./CSS/index.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>電話費計算</title>
</head>
<body>
    <span>電話費計算</span>
    <table border="1">
        <thead>
            <tr>
                <td>費率說明</td>
                <td>時間(分)</td>
                <td>小計(元)</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>600分鐘以下，每分0.5元</td>
                <td id="time1">
                    <font class="red_font">使用時數</font>
                </td>
                <td id="price1">xxx元</td>
            </tr>
            <tr>
                <td>600~1200分鐘，以九折計算</td>
                <td id="time2">
                    <font class="red_font">使用時數</font>
                </td>
                <td id="price2">xxx元</td>
            </tr>
            <tr>
                <td>1200分鐘以上，以七九折計算</td>
                <td id="time3">
                    <font class="red_font">使用時數</font>
                </td>
                <td id="price3">xxx元</td>
            </tr>
            <tr>
                <td colspan="2" class="td_center">
                    合計(四捨五入至整數位)
                </td>
                <td id="total">TOTAL</td>
            </tr>
            </tboby>
    </table>
    <hr>
    <table class="question3">
        <tbody>
            <tr>
                <td>請輸入電話使用時數：<input type="text" id="input" maxlength="8">
                <label id="popup"></label>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>
