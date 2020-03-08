# Strategyパターンの写経＆テストコード実装

## Strategyパターンとは？

戦略部分（アルゴリズム等）をクラス単位で定義（カプセル化）する事で、その切り替えや追加・拡張を容易にする処理モデル

## 問題文

日本円を外国為替へ変換するPHPアプリケーションを作成する
ドル・ユーロ・ポンドへの変換機能  
変換した金額を出力する機能

### TODO リスト

換算機能
- [ ] 円をドルに換算する
- [ ] 円をユーロに換算する
- [ ] 円をポンドに換算する

出力機能
- [ ] USDをつけて出力
- [ ] EURをつけて出力
- [ ] GBPをつけて出力


