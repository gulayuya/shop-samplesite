<?php require('sqlConnect.php') ?>

<?php 
//テーブルからsoloかつlTimeがNULLの人を数える
//今日の日付を取得
date_default_timezone_set('Asia/Tokyo');
$today = date('Ymd');
$tablename = 'table'.$today;

//SQL実行
$sql = "SELECT COUNT(cNumber) FROM $tablename WHERE lTime IS NULL AND cAttr='solo'";
$result = $db->query($sql);

$list = array();
// 取得した値を表示
if (!$result) {
    echo '';
} else {
    while ($row = mysqli_fetch_assoc($result)) {
    $list[] = $row;
    }
}

//DB接続を閉じる
$db->close();
?>

<?php 
// 行数分繰り返す
foreach ($list as $key => $value) {
    $sumS = $value['COUNT(cNumber)'] ;
}
?>


<?php require('./php/sqlconnect.php') ?>

<?php 
//テーブルからgroupかつlTimeがNULLの人を数える
//今日の日付を取得
date_default_timezone_set('Asia/Tokyo');
$today = date('Ymd');
$tablename = 'table'.$today;

//SQL実行
$sql = "SELECT COUNT(cNumber) FROM $tablename WHERE lTime IS NULL AND cAttr='group'";
$result = $db->query($sql);

$list = array();
// 取得した値を表示
if (!$result) {
    echo '';
} else {
    while ($row = mysqli_fetch_assoc($result)) {
    $list[] = $row;
    }
}

//DB接続を閉じる
$db->close();
?>

<?php 
// 行数分繰り返す
foreach ($list as $key => $value) {
    $sumG = $value['COUNT(cNumber)'] ;
}
?>