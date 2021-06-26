<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン画面</title>
</head>
<body>
<h1>ログイン・ユーザー登録</h1>

<h2>登録ユーザーの方はこちら</h2>
<form action="./php/login_act.php" method="POST">
    <fieldset>
        <label for="name">Log-in ID</label>
        <input type="text" name="lid">
        <label for="password">PASSWORD</label>
        <input type="password" name="user_password">
        <input type="submit" value="ログイン">
    </fieldset>
</form>

<h2>初めての方はこちら</h2>
<form action="./php/user_regi.php" method="POST">
    <fieldset>
        <label for="user_name">NAME</label>
        <input type="text" name="user_name">
        <label for="lid">Log-in ID</label>
        <input type="text" name="lid">
        <label for="lpw">PASSWORD</label>
        <input type="password" name="lpw">
        <label for="user_role">ROLE</label>
        <select name="user_role">
            <option value="0">管理者</option>
            <option value="1">一般ユーザー</option>
            <option value="2">参照ユーザー</option>
        </select>
        <input type="submit" value="会員登録">
    </fieldset>
</form>
    
</body>
</html>