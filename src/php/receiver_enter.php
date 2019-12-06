<?php require('sqlConnect.php') ?>

<?php 
// タイムゾーンの設定
date_default_timezone_set('Asia/Tokyo');

// 受け取ったデータの格納
$date = date('H:i:s');
$number = $_POST['number'];

// 格納するテーブル名を取得
$today = date('Ymd');
$tablename = 'table'.$today;

// 入店処理を実行
$sql = "INSERT INTO $tablename ( cNumber, eTime, cAttr, pDivi ) VALUES ( $number, '$date', '$_POST[attr]', '$_POST[pDivi]' )";

if ($db->query($sql)) {
    echo '入店処理を実行しました'.'(管理番号：'.$number.')';
} else {
    echo '入店処理が失敗しました。テーブル作成処理は実行しましたか？';
}

// DB接続を閉じる
$db->close();

?>