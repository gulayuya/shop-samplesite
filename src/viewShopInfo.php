<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>リアルタイム店内状況確認サイト</title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/viewShopInfo.css">
</head>
<body>
    <header class="header">
        <h1>Sample-viewShopInfo</h1>
    </header>
    <main class="main">
        <div class="main-shopStatus">
            <?php require('php/watchShopStatus.php') ?>
        </div>
        <?php require('php/calcNumCustomer.php') ?>
        <div class="main-customerStatus">
            <div class="main-customerStatus-solo">
                <p>＜相席＞</p>
                <p><span><?php echo $sumS ?></span>人が来店中！</p>
            </div>
            <div class="main-customerStatus-group">
                <p>＜グループ＞</p>
                <p><span><?php echo $sumG ?></span>人が来店中！</p>
            </div>
        </div>
        <div class="main-shopInfo">
            <p>店舗情報等を記載する</p>
        </div>
    </main>
</body>
</html>