<?php
require_once('./php/funcs.php');

$pdo = db_conn();

$stmt = $pdo->prepare("SELECT * FROM gs_user_table");

$status = $stmt->execute();

//4．データ表示
$view="";
if($status==false) {
    sql_error($stmt);
}else{
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    $view .="<tr>";
    $view .= "<td>".h($result['id']).'</td><td>'.h($result['name']).'</td><td>'.h($result['lid']).'</td><td>'.h($result['lpw']).'</td><td>'.h($result['role_flg']).'</td><td>'.h($result['life_flg']).'</td>';
    $view .='<td><a href="./user_modify.php?id='.h($result['id']).'">編集</a></td>';
    $view .='<td><a href="./php/delete_user.php?id='.h($result['id']).'">削除</a></td>';
    $view .="</tr>";
    }
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー管理画面</title>
</head>
<body>
<div class="warpper">
<h2>ログイン・登録画面</h2>
<a href="./login.php">ログイン・ユーザー追加</a>
</div>
<div>
    <h2>ユーザー一覧</h2>
    <table class="list_table">
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>login-id</th>
                <th>login-pw</th>
                <th>role</th>
                <th>life_flg</th>
                <th>編集ボタン</th>
                <th>削除ボタン</th>
                </tr>
                <?= $view ?>
        </table>
</div>
</body>
</html>