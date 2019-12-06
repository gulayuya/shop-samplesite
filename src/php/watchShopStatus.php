<?php require('sqlConnect.php') ?>

<?php 
//今日の日付を取得
date_default_timezone_set('Asia/Tokyo');
$today = date('Ymd');
$tablename = 'table'.$today;

//SQL実行
$sql = "SELECT * FROM $tablename";
$result = $db->query($sql);
if (!$result) {
    echo '<div class="_close"><p><span>現在閉店中です。</span>営業時間は<br>平日：hh:mm ~ hh:mm<br>休日：hh:mm ~ hh:mm</p></div>';
} else {
    echo '<div class="_open"><p><span>現在営業中です！</span><br>平日：hh:mm ~ hh:mm<br>休日：hh:mm ~ hh:mm</p></div>';
}

?>