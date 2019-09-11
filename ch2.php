<!DOCTYPE html>
<html>
    <head> 
        <title>欄位</title>
        <style type='text/css'>            /*從下列開始是CSS*/
            .showgreen {color:green}
            .showblue {color:blue}
        </style>
    </head>
    <body class='showblue'>
        <form method = 'get'>
            <p class='showgreen'>請輸入帳號:
            <input type='text' name='username'></p>
            請輸入密碼:
            <input type='password' name='passwd'><br>
            備註:<br>
            <textarea name='note' cols='40' rows='5'></textarea><br>
            性別:
            <input type='radio' name ='gender' value = 'male'>男
            <input type='radio' name ='gender' value = 'female'>女<br>
            興趣:<br>
            <input type='checkbox' name='baking'>烘培<br>
            <input type='checkbox' name='cooking'>煮飯<br>
            <input type='checkbox' name='hiking'>爬山<br>
            <input type='submit' value = '送出資料'>
            <input type='reset' value = '清除資料'><br>
            我想學:<br>
            <select name='learning' multiple>
                <option value='1'>HTML</option>
                <option value='2' selected='on'>PHP</option>
                <option>css</option>
                <option value='4'>JavaScript</option>
                <option value='5'>Java</option>
            </select><br>

        </form>
    </body>
</html>