<?php
require_once('./php/funcs.php');

try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}
//２．SQL文を用意(データ取得：SELECT)
$stmt = $pdo->prepare("SELECT category, COUNT(id) FROM product GROUP BY category");
//3. 実行
$status = $stmt->execute();

//4．データ表示＆配列に加工
$graph1="";
$category ="";
$count ="";

if($status==false) {
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  while( $result1 = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    $graph1 .="<tr>";
    $graph1 .= "<td>".h($result1['category']).'</td><td>'.h($result1['COUNT(id)']);
    $graph1 .="</tr>";
    $category = $category. '"'. $result1['category'].'",';
    $count = $count. '"'. $result1['COUNT(id)'].'",';
    }
    $category = trim($category,",");
    $count = trim($count,",");
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.js" integrity="sha512-VCHVc5miKoln972iJPvkQrUYYq7XpxXzvqNfiul1H4aZDwGBGC0lq373KNleaB2LpnC2a/iNfE5zoRYmB4TRDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/index.css">
    <title>管理画面</title>
</head>
<body>
<header>Product Management Tool</header>

<div class="wrapper">
    <div class="menu">
        <ul><h2>メニュー</h2>
            <li><a href="./prd_plan.php">商品管理</a></li>
            <li><a href="./sku.php">SKU管理（未）</a></li>
            <li><a href="#">BIツール（未）</a></li>
            <li><a href="#">マスター管理（未）</a></li>
        </ul>
    </div>

    <div class="content">
        <div class="item">
            <h3>アイテム構成比（2021年）</h3>
            <div class="graph1">
                <table class="data_table">
                    <tr>
                        <th>アイテムカテゴリー</th>
                        <th>展開品番数</th>
                    </tr>
                    <?= $graph1 ?>
                </table>
                <div class="grapharea">
                    <canvas id="myChart" style="position: relative; height:100; width:150"></canvas>
                </div>
            </div>
        </div>
        <div>
            <h3>コンテンツB（Google検索キーワード構成を表示</h3>
        </div>
        <div>
            <h3>コンテンツC（何にしようかしら）</h3>
        </div>
    </div>
</div>
<script>
    //pie chartを作成する
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
    type: 'pie',
        data: {
            labels: [<?php echo $category ?>],
            datasets: [{
                backgroundColor: [
                    'rgba(255, 50, 50, 0.2)',
                    'rgba(255, 100, 50, 0.2)',
                    'rgba(255, 153, 50, 0.2)',
                    'rgba(255, 255, 50, 0.2)',
                    'rgba(153, 255, 50, 0.2)',
                    'rgba(50, 255, 204, 0.2)',
                    'rgba(50, 204, 255, 0.2)',
                    'rgba(50, 50, 255, 0.2)',
                    'rgba(153, 50, 255, 0.2)',
                    'rgba(255, 50, 255, 0.2)',
                    'rgba(255, 50, 153, 0.2)',
                    'rgba(255, 255, 255, 0.2)',
                    'rgba(0, 0, 0, 0.2)'
                ],
                data: [<?php echo $count ?>]
            }]
        }
    }
    );
    </script>
</body>
</html>