# ガソリン代、交通費、割り勘計算します
日常、レジャーでの移動時にかかるガソリン代及び高速道路代、駐車場代、レンタカー代金を割り勘計算します。

heroku => https://gasorin-warikan.herokuapp.com/



## 使い方
各項目欄に情報を入力してください。その際に、単位の入力はしないでください。

例）

- 走行距離 NG 100Km → OK 100
- ガソリン価格 NG 140円 → OK 140

### 入力必須項目
以下の項目は必ず入力してください。
  - 走行距離
  - 車の1リットルあたりの燃費
  - 1リットルあたりのガソリン価格
  - 割り勘する人数

※高速道路代金、駐車場代金、レンタカー代金は必要に応じて入力してください。

### ガソリン代、交通費の計算式
計算式は以下の通りです。

（走行距離 ÷ 車の1リットルあたりの値段 × 1リットルあたりのガソリン価格 ＋ 高速代金 ＋ 駐車場代金 ＋ レンタカー代金） ÷ 割り勘する人数

合計金額の小数点は切り捨てです。

### git clone

```
$ https://github.com/shigenori-tanaka/gasorin-warikan.git
$ localhost:8000
```

