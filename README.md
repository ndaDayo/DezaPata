# Strategyパターンの写経＆テストコード実装

### 写経するコード

https://www.ritolab.com/entry/130

## Strategyパターンとは？

戦略部分（アルゴリズム等）をクラス単位で定義（カプセル化）する事で、その切り替えや追加・拡張を容易にする処理モデル

Strategyパターンは、この「作戦」や「戦略」を1つのクラスにまとめ、「作戦」や「戦略」の単位で切り替えられるようにするパターンです。

## Strategyパターンのメリット

メソッドの中でアルゴリズムをifやwitchなどの条件分岐で切り替えると、処理が煩雑になりメンテナンス性も低下してきますが、Strategyパターンを用いて「１つの戦略を１つのクラスで作成し、戦略変更時はクラスを変更する」といった手法をとると見通しが各段に良くなります。機能拡張や切り替えも各段に容易になるのもうれしいポイントです。


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

### 良くない例

```
// App/MoneyExchange.php

public function currencyConversion($country)
    {
        if ($country === 'US') {
            return $this->yen * $this->doll_rate;
        } else if ($country === 'EUR') {
            return $this->yen * $this->eur_rate;
        } else if ($country === 'ENGLAND') {
            return $this->yen * $this->pond_rate;
        } else {
            return false;
        }
    }
```

・可読性が下がる  
・メンテナンス性も下がる