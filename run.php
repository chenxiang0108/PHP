<!DOCTYPE html>
<html>
    <title>萬人路跑活動報名</title>
    <style type = 'text/css'>
        @media screen and (min-width:789px){
            form {width:800px}
            fieldset {border-color:orange}
            legend,p {font-weight:bold}
            img {float:left;margin:10px;height:240px}
            .align_top {vertical-align:top}
        }
        @media screen and (max-width:788px){
            fieldset {border-color:orange;}
            img {width:50%;}
            legend,p {font-weight:bold}
            .align_top {vertical-align:top}
        }
    </style>
    <body>
        <img src='run.png'>
        <form>
            <fieldset>
                <legend>基本資料(*為必填欄位)</legend>
                *姓名:<input name='mail' type ='text' required><br> 
                *性別:<input name='gender' type ='radio' value = 'male' required>男
                <input name='gender' type ='radio' value = 'female' required>女<br>
                <span class='align_top'>*通訊地址:</span>
                <textarea name='addr' rows='2' cols='40'required></textarea><br>
                *E-MAIL:<input name='email' type = 'email' required><br>
                *連絡電話:<input name = 'tel' type = 'tel' required>
            </fieldset>

            <fieldset>
                <legend>參加項目</legend>
                <input name='legth' type='radio' value='7'>7KM<br>
                <input name='legth' type='radio' value='21'>21KM<br>
                <input name='legth' type='radio' value='42'>42KM
            </fieldset>

            <p>選擇活動T-Shirt贈品尺寸
            <select name='tshirt_size'>
                <option>XXL</option>
                <option>XL</option>
                <option>L</option>
                <option>M</option>
                <option>S</option>
            </select></P>

            <fieldset>
                <legend>緊急連絡人</legend>
                緊急聯絡人姓名:<input name='emer_contact' type='text'><br>
                緊急聯絡人電話:<input name='emer_tel' type='text'>
            </fieldset>
            <input name='sendnotic' type='checkbox'>要收到本公司的其他活動訊息。
            <input type='submit' value='送出'>
            <input type='reset' value='清除'>
        </form>

    </body>
</html>