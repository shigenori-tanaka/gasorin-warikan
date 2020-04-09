<?php require_once('calculation.php') ?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf8">
        <title>peace</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <nav class="navbar navbar-light p-0" style="background-color:aquamarine;">
            <div class="container">
                <h5 id="title">計算結果</h5>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <h6>走行距離（Km）</h6>
                </div>
                <div class="col-sm-5">
                    <?php $mileage = $_GET['mileage']; echo "{$mileage} Km"; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <h6>車の1リットルあたりの走行距離</h6>
                </div>
                <div class="col-sm-5">
                    <?php $gasoline_mileage = $_GET['gasoline_mileage']; echo "{$gasoline_mileage} Km"; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <h6>1リットルのガソリン代</h6>
                </div>
                <div class="col-sm-5">
                    <?php $gasoline = $_GET['gasoline']; echo "{$gasoline} 円"; ?>
                </div>
            </div>
            <?php if($highway != 0): ?>
                <div class="row">
                    <?php $highway = $_GET['highway']; ?>
                    <div class="col-sm-5">
                        <h6>高速代金</h6>
                    </div>
                    <div class="col-sm-5">
                        <?php $highway = $_GET['highway']; echo "{$highway} 円"; ?>
                    </div>
                </div>
            <?php endif ?>

            <?php if($parking != 0): ?>
                <div class="row">
                    <?php $parking = $_GET['parking']; ?>
                    <div class="col-sm-5">
                        <h6>駐車場代金</h6>
                    </div>
                    <div class="col-sm-5">
                        <?php $parking = $_GET['parking']; echo "{$parking} 円"; ?>
                    </div>
                </div>
            <?php endif ?>

            <?php if($rent_a_car != 0): ?>
                <div class="row">
                    <?php $rent_a_car = $_GET['rent_a_car']; ?>
                    <div class="col-sm-5">
                        <h6>レンタカー代金</h6>
                    </div>
                    <div class="col-sm-5">
                        <?php $rent_a_car = $_GET['rent_a_car']; echo "{$rent_a_car} 円"; ?>
                    </div>
                </div>
            <?php endif ?>
            <div class="row">
                <div class="col-sm-5">
                    <h6>割り勘人数</h6>
                </div>
                <div class="col-sm-5">
                    <?php $man = $_GET['man']; echo "{$man} 人"; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="total">合計</h4>
                </div>
                <div class="col-sm-5">
                    <h4 class="total2"><?php echo $calculation->Add($mileage, $gasoline_mileage, $gasoline, $highway, $parking, $rent_a_car, $man)." 円"; ?></h4>
                </div>
            </div>
            <a href="index.php">戻る</a>
    </body>
</html>
