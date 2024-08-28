<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js?202408141037"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous">
        </script>
    <script src="./JS/question3.js" defer></script>
    <link rel="stylesheet" href="./CSS/index.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>統一發票對獎</title>
</head>

<body>
    <span>統一發票對獎</span>
    <table border="1">
        <thead>
            <tr>
                <td>獎別</td>
                <td>號碼</td>
                <td>備註</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>特別獎</td>
                <td>
                    <font class="red_font">86396830</font>
                </td>
                <td>同期統一發票收執聯8位數號碼與特別獎號碼相同者，獎金 1,000 萬元</td>
            </tr>
            <tr>
                <td>特獎</td>
                <td>
                    <font class="red_font">53267964</font>
                </td>
                <td>同期統一發票收執聯8位數號碼與特別獎號碼相同者，獎金 200 萬元</td>
            </tr>
            <tr>
                <td>頭獎</td>
                <td>
                    39635<font class="red_font">796</font><br>
                    98978<font class="red_font">859</font><br>
                    55566<font class="red_font">054</font><br>
                </td>
                <td>同期統一發票收執聯8位數號碼與特別獎號碼相同者，獎金 20 萬元</td>
            </tr>
            <tr>
                <td>二獎</td>
                <td colspan="2">同期統一發票收執聯末7位數號碼與頭獎中獎號碼末7位相同者，各得獎金 4 萬元</td>
            </tr>
            <tr>
                <td>三獎</td>
                <td colspan="2">同期統一發票收執聯末6位數號碼與頭獎中獎號碼末6位相同者，各得獎金 1 萬元</td>
            </tr>
            <tr>
                <td>四獎</td>
                <td colspan="2">同期統一發票收執聯末5位數號碼與頭獎中獎號碼末5位相同者，各得獎金 4 仟元</td>
            </tr>
            <tr>
                <td>五獎</td>
                <td colspan="2">同期統一發票收執聯末4位數號碼與頭獎中獎號碼末4位相同者，各得獎金 1 仟元</td>
            </tr>
            <tr>
                <td>六獎</td>
                <td colspan="2">同期統一發票收執聯末3位數號碼與頭獎中獎號碼末3位相同者，各得獎金 2 佰元</td>
            </tr>
            <tr>
                <td colspan="3" class="td_center">領獎期間自 113 年 08 月 06日 起至 113年 11 月 05 日止</td>
            </tr>
            </tboby>
    </table>
    <hr>
    <table border = "1">
        <tr>
            <td>請輸入發票號碼：<input type="text" id="input" maxlength="8"></td>
        </tr>

    </table>
</body>

</html>