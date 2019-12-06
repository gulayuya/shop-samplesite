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

// 退店処理を実行
$sql = "UPDATE $tablename SET lTime = '$date' WHERE cNumber = $number";

if ($db->query($sql)) {
    echo '退店処理を実行しました'.'(管理番号：'.$number.')';
} else {
    echo '退店処理が失敗しました。管理番号はお間違えないですか？';
}
echo '<br>';

// DB接続を閉じる
$db->close();
?>

<?php require('sqlConnect.php') ?>

<?php //滞在時間を計算する
//今日の日付を取得
date_default_timezone_set('Asia/Tokyo');
$today = date('Ymd');
$tablename = 'table'.$today;

//SQL文を作成して実行
$sql = "SELECT * FROM $tablename WHERE cNumber = $_POST[number]";
$result = mysqli_query($db, $sql);
$list = array();

// 取得した値を表示
while ($row = mysqli_fetch_assoc($result)) {
    $list[] = $row;
}
foreach ($list as $key => $value) {
    $eTime = $value['eTime'];
    $lTime = $value['lTime'];
    $pDivi = $value['pDivi'];
}

//滞在時間算出
//データベースに登録されている時間を数値に変換
$buf_eTime = strtotime($eTime);
$buf_lTime = strtotime($lTime);

//滞在時間を計算
$staytime = $buf_lTime - $buf_eTime;
echo '滞在時間は'.$staytime.'秒です';
echo '<br>';

//料金を表示
if ($_POST['number'] < 100 && $pDivi == 'holiday') { // 通常かつ休日の場合の処理
    switch ($staytime) {
        case $staytime<8101:
            echo "料金は1000円です";
            break;
        case $staytime<10801:
            echo "料金は1250円です";
            break;
        case $staytime<14401:
            echo "料金は1500円です";
            break;
        case $staytime<18001:
            echo "料金は1750円です";
            break;
        case $staytime>18000:
            echo "料金は2000円です";
            break;
        }
} else { // 上記以外(平日や学生料金)
    switch ($staytime) {
        case $staytime<8101:
            echo "料金は1000円です";
            break;
        case $staytime<10801:
            echo "料金は1200円です";
            break;
        case $staytime<14401:
            echo "料金は1400円です";
            break;
        case $staytime>14400:
            echo "料金は1500円です";
            break;
        }
}

//DB接続を閉じる
$db->close();
?>