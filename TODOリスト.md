TODOリスト

# 整数閉区間を示すクラス（あるいは構造体）をつくる

## 整数閉区間オブジェクト
### 持つ値[重要度高 テスト:しやすい:着手2]
- [x] * 下端点と上端点を持つ。 ただし、上端点より下端点が大きい閉区間を作ることはできない。
### 表現[重要度高 テスト:しやすい:着手1]
- [x] * 文字列表現を返すことができる。
    * （例: 下端点 3, 上端点 8 の整数閉区間の文字列表記は `"[3,8]"`）。 
### 判定できること[重要度高 テスト:しにくい:着手3]
- [x] * 指定した整数を含むかどうか判定できる。
    -[x] 下端点3上端点8をもつ閉区間に3が含まれる
    -[x] 下端点3上端点8をもつ閉区間に8が含まれる
    -[x] 下端点3上端点8をもつ閉区間に2が含まれない
    -[x] 下端点3上端点8をもつ閉区間に9が含まれない

* - [] 別の閉区間と等価かどうか判定できる。
   -[x] 下端点3上端点8をもつ2つの閉区間を等価と判定する
   -[] 下端点3上端点8、下端点4上端点9の閉区間は等価と判定しない
* 別の閉区間が完全に含まれるか判定できる。






-----------------------------------------------------------------------------------------------------------
問題文
整数閉区間を示すクラス（あるいは構造体）をつくりたい。整数閉区間オブジェクトは下端点と上端点を持ち、文字列表現も返せる（例: 下端点 3, 上端点 8 の整数閉区間の文字列表記は `"[3,8]"`）。ただし、上端点より下端点が大きい閉区間を作ることはできない。整数の閉区間は指定した整数を含むかどうかを判定できる。また、別の閉区間と等価かどうかや、完全に含まれるかどうかも判定できる。
https://gist.github.com/twada/75fb219c8cc180e9de166d8a58e877b0
