<!DOCTYPE html>
<html lang="en">

<head>
    <script src="./JS/question4.js?20240920" defer></script>
    <?php include "head.php"?>
    <title>統一發票對獎</title>
</head>

<body>
    <span>統一發票對獎</span>
    <table>
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
                    <font class="redFont">86396830</font>
                </td>
                <td>同期統一發票收執聯8位數號碼與特別獎號碼相同者，獎金 1,000 萬元</td>
            </tr>
            <tr>
                <td>特獎</td>
                <td>
                    <font class="redFont">53267964</font>
                </td>
                <td>同期統一發票收執聯8位數號碼與特別獎號碼相同者，獎金 200 萬元</td>
            </tr>
            <tr>
                <td>頭獎</td>
                <td>
                    39635<font class="redFont">796</font><br>
                    98978<font class="redFont">859</font><br>
                    55566<font class="redFont">054</font><br>
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
                <td colspan="3" class="td_center">
                    領獎期間自 113 年 08 月 06日 起至 113年 11 月 05 日止<br>
                    <font class="redFont">☆故意選過號碼，一個一個字key in特獎號，會同時有中六獎的狀況☆</font>
                </td>
            </tr>
            </tboby>
    </table>
    <hr>
    <table class="question3">
        <tbody>
            <tr>
                <td>請輸入發票號碼：<input type="text" id="input" maxlength="8"></td>
                <td>
                    <a href="http://127.0.0.1/php_practice/question3.php/%22%3E%3Cscript%3Ealert(document.cookie);%3C/script%3E/">XSS</a>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>