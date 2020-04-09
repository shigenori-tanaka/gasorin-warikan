<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf8">
        <title>enjoy Drive!!</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <nav class="navbar navbar-light p-0" style="background-color:aquamarine;">
            <div class="container">
                <h5 id="title">ガソリン代割り勘計算アプリ <span id="title-id">"enjoy Drive!!"</span></h5>
            </div>
        </nav>

        <div class="container">
            <p class="overview">車を使ったときのガソリン代や交通費の割り勘計算ができるアプリケーションです。<br><a href="use.html">使い方はこちらから</a></p>
        </div>
        <div class="container">
            <form action="top.php" method="GET">
                <div class="row">
                    <div class="col-sm-5">
                        <h6>走行距離</h6>
                    </div>
                    <div class="col-sm-5">
                        <input type="text" name="mileage" required>
                        <p style="display:inline">km</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <h6>車の1リットルあたりの燃費</h6>
                        <p><a href="https://e-nenpi.com/enenpi/" target="_brank">実燃費一覧はこちら（外部サイト）</a></p>
                    </div>
                    <div class="col-sm-5">
                        <input type="text" name="gasoline_mileage" required>
                        <p style="display:inline">km</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <h6>1リットルあたりのガソリン価格</h6>
                    </div>
                    <div class="col-sm-5">
                        <input type="text" name="gasoline" required>
                        <p style="display:inline">円</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <h6>割り勘する人数</h6>
                    </div>
                    <div class="col-sm-5">
                        <input type="text" name="man" required>
                        <p style="display:inline">人</p></div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <h4 id="option">オプション</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <h6>高速道路代金</h6>
                        <p><a href="https://www.driveplaza.com/dp/SearchTop" target="_brank">高速道路代金検索はこちら（外部サイト）</a></p>
                    </div>
                    <div class="col-sm-5">
                        <input type="text" name="highway" style="text-align: right;" value="0">
                        <p style="display:inline">円</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <h6>駐車場代金</h6>
                    </div>
                    <div class="col-sm-5">
                        <input type="text" name="parking" style="text-align: right;" value="0">
                        <p style="display:inline">円</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <h6>レンタカー代金</h6>
                    </div>
                    <div class="col-sm-5">
                        <input type="text" name="rent_a_car" style="text-align: right;" value="0">
                        <p style="display:inline">円</p>
                    </div>
                </div>
                <div class="row">
                    <input class="btn btn-dark" role="button" type="submit" value="計算する" style="margin-right:10px">
                    <input class="btn btn-dark" role="button" type="reset" value="クリア" onclick="return confirm_test()">
                </div>
                <!-- クリアアラート設定 ここから-->
                <script>
                    function confirm_test() {
                    var select = confirm("内容をクリアしますか？");
                    return select;
                    }
                </script>
                <!-- クリアアラート設定 ここまで-->
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
