<?php require('sqlConnect.php') ?>

<?php 
//今日の日付を取得
date_default_timezone_set('Asia/Tokyo');
$today = date('Ymd');
$tablename = 'table'.$today;

//データの受け取り
$number = $_POST['number'];

//SQL文
$sql = "DELETE FROM $tablename WHERE cNumber = '$number'";

//SQL実行
if ( $db->query($sql)) {
    echo '削除処理を実行しました'.'(管理番号：'.$number.')';
} else {
    echo '削除処理が失敗しました。管理番号はお間違えないですか？';
}

//DB接続を閉じる
$db->close();

?>