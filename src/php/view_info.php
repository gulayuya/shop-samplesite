<?php require('sqlConnect.php') ?>

<?php 
// 今日の日付を取得
date_default_timezone_set('Asia/Tokyo');
$today = date('Ymd');
$tablename = 'table'.$today;

// SQL実行
$sql = "SELECT * FROM $tablename";
$result = mysqli_query($db, $sql);
$list = array();

// 取得した値を表示
while ($row = mysqli_fetch_assoc($result)) {
    $list[] = $row;
}

// DB接続を閉じる
$db->close();
?>

<!-- 入退店info -->
<table>
<tr>
    <th>管理番号</th>
    <th>入店時間</th>
    <th>退店時間</th>
    <th>属性</th>
    <th>区分</th>
</tr>

<?php 
// 行数分繰り返す
foreach ($list as $key => $value) {
    ?>
    <tr>
        <td>
            <?php echo $value['cNumber'] ?>
        </td>
        <td>
            <?php echo $value['eTime'] ?>
        </td>
        <td>
            <?php echo $value['lTime'] ?>
        </td>
        <td>
            <?php echo $value['cAttr'] ?>
        </td>
        <td>
            <?php echo $value['pDivi'] ?>
        </td>
    </tr>
    <?php 
}
?>