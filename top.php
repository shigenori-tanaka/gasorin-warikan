<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf8">
        <link rel="stylesheet" href="top_html.css">
        <title >ガソリン代割り勘計算</title>
    </head>

    <body>
        <header>計算結果</header>
        <div class="form">
            <h4>走行距離（Km）</h4>
            <?php $mileage = $_GET['mileage']; ?>
            <p class="result"> <?php echo "{$mileage}Km"; ?> </p>
            
            <h4>車の1リットルあたりの走行距離（Km）</h4>
            <?php $gasoline_mileage = $_GET['gasoline_mileage']; ?>
            <p class="result"> <?php echo "{$gasoline_mileage}Km"; ?> </p>
            
            <h4>1リットルのガソリン代（円）</h4>
            <?php $gasoline = $_GET['gasoline']; ?>
            <p class="result"> <?php echo "{$gasoline}円";?> </p>
            
            <!-- 高速代表示 -->
            <?php $highway = $_GET['highway']; ?>
            <?php if($highway != 0): ?>
                <h4> <?php echo "高速代金"; ?> </h4>
                <p class="result"> <?php echo "{$highway}円" ?> </p>
            <?php endif ?>
            
            <!-- 駐車場代表示 -->
            <?php $parking = $_GET['parking']; ?>
            <?php if($parking != 0): ?>
                <h4> <?php echo "駐車場代金"; ?> </h4>
                <p class="result"> <?php echo "{$parking}円"; ?> </p>
            <?php endif ?>
            
            <!-- レンタカー代表示 -->
            <?php $rent_a_car = $_GET['rent_a_car']; ?>
            <?php if($rent_a_car != 0): ?>
                <h4> <?php echo "レンタカー代金"; ?> </h4>
                <p class="result"> <?php echo "{$rent_a_car}円"; ?> </p>
            <?php endif ?>
                
            <h4>割り勘する人数</h4>
            <?php $man = $_GET['man']; ?>
            <p class="result"> <?php echo "{$man}人"; ?>
            
            <h4>合計（円）</h4>
            <?php $total = ($mileage/$gasoline_mileage*$gasoline+$highway+$parking+$rent_a_car)/$man; ?>
            <p class="result"> <?php echo floor($total)."円"; ?>
        </div>

    </body>
</html>