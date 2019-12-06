<?php require('sqlConnect.php') ?>

<?php 
//今日の日付を取得
date_default_timezone_set('Asia/Tokyo');
$today = date('Ymd');
$tablename = 'table'.$today;

//データの受け取り
$number = $_POST['number'];
$modifyTarget = $_POST['modifyTarget'];
$modifyContent = $_POST['modifyContent'];

//SQL文
$sql = "UPDATE $tablename SET $modifyTarget = '$modifyContent' WHERE cNumber = $number";

//SQL実行
if ($db->query($sql)) {
    echo '修正処理を実行しました'.'(管理番号：'.$number.')';
} else {
    echo '修正処理が失敗しました。管理番号はお間違えないですか？';
}

//DB接続を閉じる
$db->close();

?>