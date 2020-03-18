<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf8">
        <link rel="stylesheet" href="index.php.css">
        <title >ガソリン代割り勘計算</title>
    </head>
    <body>
        <header>ガソリン代 交通費 割り勘計算します！</header>
        <div class="use_it">
            <a href="use.html">使い方はこちら</a>
        </div>
        <form class="form" action="top.php" method="GET">
            <div class="mileage">
                <h4 class="category">走行距離（Km）</h4>
                <input type="text" name="mileage" required>
            </div>
            <div class="gasoline_mileage">
                <h4 class="category">車の1リットルあたりの燃費（Km）</h4>
                <a href="https://e-nenpi.com/enenpi/" target="_brank">実燃費一覧はこちら（外部サイト）</a>
                <input type="text" name="gasoline_mileage" required>
            </div>
            <div class="gasoline">
                <h4 class="category">1リットルあたりのガソリン価格（円）</h4>
                <input type="text" name="gasoline" required>
            </div>
            <div class="highway">
                <h4 class="category">高速道路代金（円）</h4>
                <a href="https://www.driveplaza.com/dp/SearchTop" target="_brank">高速道路代金検索はこちら（外部サイト）</a>
                <input type="text" name="highway" value="0">
            </div>
            <div class="parking">
                <h4 class="category">駐車場代金（円）</h4>
                <input type="text" name="parking" value="0">
            </div>
            <div class="rent_a_car">
                <h4 class="category">レンタカー代金（円）</h4>
                <input type="text" name="rent_a_car" value="0">
            </div>
            <!-- 駐車場代、レンタカー代はデフォルトで0を入れる -->
            <div class="man">
                <h4 class="category">割り勘する人数</h4>            
                <input type="text" name="man" required>
            </div>
            <input class="btn" type="submit" value="計算する">

            <input class="btn" type="reset" value="クリア" onclick="return confirm_test()">
            <!-- クリアアラート設定 ここから-->
            <script>
                function confirm_test() {
                var select = confirm("内容をクリアしますか？");
                return select;
                }
            </script>
            <!-- クリアアラート設定 ここまで-->


        </form>
    </body>
</html>