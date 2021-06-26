<?php
require_once('./funcs.php');
//POST date
$user_name =$_POST["user_name"];
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];
$user_role = $_POST["user_role"];

//DB connect
$pdo = db_conn();

//SQL
$stmt = $pdo->prepare(
    "INSERT INTO gs_user_table(id, name, lid, lpw, role_flg, life_flg)
     VALUES(NULL, :user_name, :lid, :lpw, :user_role, 0)"
     );

//bind
$stmt->bindValue(':user_name', $user_name, PDO::PARAM_STR);
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);
$stmt->bindValue(':user_role', $user_role, PDO::PARAM_INT);

//sql do
$status = $stmt->execute();

//after sql
if($status==false){
    sql_error($stmt);
    }else{
//redirect
    redirect('../login.php');
    }

?>