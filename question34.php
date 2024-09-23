<!DOCTYPE html>
<html lang="en">
<head>
    <script src="./JS/question34.js" defer></script>
    <?php include "head.php"?>
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
                    <font class="redFont">使用時數</font>
                </td>
                <td id="price1">xxx元</td>
            </tr>
            <tr>
                <td>600~1200分鐘，以九折計算</td>
                <td id="time2">
                    <font class="redFont">使用時數</font>
                </td>
                <td id="price2">xxx元</td>
            </tr>
            <tr>
                <td>1200分鐘以上，以七九折計算</td>
                <td id="time3">
                    <font class="redFont">使用時數</font>
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