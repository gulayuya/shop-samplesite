<?php require('sqlConnect.php') ?>

<?php 
// バックアップを作成
// 今日の日付を取得
date_default_timezone_set('Asia/Tokyo');
$today = date('Ymd');
$tablename = 'table'.$today;

// バックアップ側にテーブルを作成
$backuptablename = 'backup_'.$tablename;

$sql = "CREATE TABLE $backuptablename LIKE $tablename";

if ($db->query($sql)) {
    echo 'バックアップの準備ができました<br>';
} else {
    echo 'バックアップの準備が正常に完了しませんでした<br>';
}

//バックアップ側にテーブルをコピー
$sql = "INSERT INTO $backuptablename SELECT * FROM $tablename";

if ($db->query($sql)) {
    echo 'バックアップが完了しました<br>';
} else {
    echo 'バックアップに失敗しました<br>';
}

// テーブルを削除
$sql = "DROP TABLE $tablename";
if ($db->query($sql)) {
    echo '営業終了時処理が完了しました';
} else {
    echo '営業終了時処理が完了できませんでした';
}

?>