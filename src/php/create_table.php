<?php require('sqlConnect.php') ?>

<?php 
// その日のテーブルが作成されていない場合にテーブルを作成

// 今日の日付を取得
date_default_timezone_set('Asia/Tokyo');
$today = date('Ymd');
$tablename = 'table'.$today;

// すでにテーブルが存在するか確認
$check = "SELECT * FROM $tablename";
$result = $db->query($check);

// テーブルがない場合にテーブルを作成
$sql = "CREATE TABLE $tablename (cNumber smallint, eTime time, lTime time, cAttr char(5), pDivi char(7))";

if (!$result) {
    $db->query($sql);
    echo '新しくテーブルを作成しました';
} else {
    echo 'すでにテーブルは作成されています。今日はもうこの処理を実行する必要はありません';
}

// DB接続を閉じる
$db->close();

?>