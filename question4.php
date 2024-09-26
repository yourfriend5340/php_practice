<!DOCTYPE html>
<html lang="en">

<head>
    <script src="js/question4.js?20240920" defer></script>
    <?php include "head.php"?>
    <title>大樂透開獎</title>
</head>

<body class="indexBody">
    <span>大樂透開獎(此例因無用資料庫且有暫存，用jqeury來撰寫)</span>
    <table class="indexTable alignCenter">
        <thead  class="indexThead">
            <tr>
                <th colspan="7">本期獎號</th>
            </tr>
            <tr class="question4Tr">
                    <td id="1">一</td>
                    <td id="2">二</td>
                    <td id="3">三</td>
                    <td id="4">三</td>
                    <td id="5">五</td>
                    <td id="6">六</td>
                    <td id="special">特別號</td>
            </tr>
        </thead>
        <tbody id="tbodyHead">
            <tr>
                <td>9</td>
                <td>8</td>
                <td>7</td>
                <td>6</td>
                <td>5</td>
                <td>4</td>
                <td>3</td>

            </tr>
        </tbody>
    </table>
    <br />

    <span>
        目前資料筆數：
        <em id="recordCount">0</em>
    </span>
    <table class="indexTable alignCenter" id="question4UserTable">
        <thead  class="indexThead">
        <tr>
            <th colspan="9">你的獎號</th>
        </tr>
        <tr class="question4Tr" id="question4Tr">
            <td>流水號</td>
            <td id="1">一</td>
            <td id="2">二</td>
            <td id="3">三</td>
            <td id="4">三</td>
            <td id="5">五</td>
            <td id="6">六</td>
            <td id="special">特別號</td>
            <td>其他功能</td>
        </tr>
        </thead>
        <tbody id="question4TrStart" class="question4TrStart">
        </tbody>
    </table>

    <button id="newLine">新增一筆(行)資料</button>
    <span class="caution"></span>
    <br />
    <hr class="alignCenter">
    <label for="question4Input">請輸入你的獎卷號碼：</label>
    <input type="number" id="question4Input" maxlength="2" max="42" min="1" step="1">

</body>

</html>