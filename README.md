## Observerパターン

「Observer = 観察者」を意味する通り、Observerパターンでは観察する側(Observer)と観察される側(Subject)の関係を築き、Subjectの状態が変化した際にはObserverへその通知を行い、ある機能の一連の処理として必要な処理をさらに走らせるという流れになっています。


## 観察する側(Observer)と観察される側(Subject)

### 観察する側(Observer)

LoggingListener.php  

MailListener.php  

SlackListener.php  

### 観察される側(Subject)

BulletinBoard.php


