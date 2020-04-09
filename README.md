# ガソリン代割り勘計算アプリ "enjoy Drive!!"
車を使ったときのガソリン代や交通費の割り勘計算ができるアプリケーションです。

## 使い方
各項目に情報を入力し、計算するボタンを押してください。
※入力必須項目（オプション項目には最初から0が入っていますが、必要に応じて入力してください）
- 走行距離
- 車の1リットルあたりの燃費
- 1リットルあたりのガソリン価格
- 割り勘する人数

## ガソリン代、交通費の計算式
計算式は以下の通りです。

（走行距離 ÷ 車の1リットルあたりの値段 × 1リットルあたりのガソリン価格 ＋ 高速代金 ＋ 駐車場代金 ＋ レンタカー代金） ÷ 割り勘する人数

合計金額の小数点は切り捨てです。

## 開発環境
- macOS
- PHP7.3

## セットアップ

```
$ git clone https://github.com/shigenori-tanaka/gasorin-warikan.git
$ php -S localhost:8000
```
他に、Herokumを寝かさないために設定時間ごとに自動でサイトを訪れるUptimeRobotというWebサービスを設定しています。


https://uptimerobot.com/login?rt=https://uptimerobot.com/dashboard#mainDashboard

使い方はこちらを参考にさせていただきました。

https://casualdevelopers.com/tech-tips/how-to-prevent-idling-of-free-dyno-on-heroku/


## Heroku
https://gasorin-warikan.herokuapp.com/

