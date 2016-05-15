#oanda.com REST API Wrapper on PHP
[![Build Status](https://travis-ci.org/nikopeikrishvili/Oanda.svg?branch=master)](https://travis-ci.org/nikopeikrishvili/Oanda)
## ToDo
- [X] getAccounts Method
- [X] getAccount Method
- [ ] getInstrumentsList Method
- [ ] getCurrentProces
- [ ] getInstrumentHistory
- [ ] getOrders
- [ ] getOrder
- [ ] createOrder
- [ ] modifyOrder
- [ ] closeOrder
- [ ] getOpenTrades
- [ ] getTrade
- [ ] modifyTrade
- [ ] closeTrade
- [ ] getOpenPositions
- [ ] getPositionForInstrument
- [ ] closePosition
- [ ] getTransactionHistory
- [ ] getTransaction
- [ ] getFullAccountHistory

## Installing
### Github

```
git clone git@github.com:nikopeikrishvili/Oanda.git
cd Oanda
```

## Examples
### GetAccounts Method http://developer.oanda.com/rest-live/accounts/#getAccountsForUser
```PHP
require_once __DIR__.'/vendor/autolod.php';
```
``` PHP
$acc = new Account();
$accounts = $acc->getAccounts();

```
###Returns : 
```PHP

Oanda\response\Accounts Object
(
    [accounts:Oanda\response\Accounts:private] => Array
        (
            [9288783] => Oanda\response\Account Object
                (
                    [accountId:Oanda\response\Account:private] => 9288783
                    [accountName:Oanda\response\Account:private] => nikopeikrishvili
                    [accountCurrency:Oanda\response\Account:private] => USD
                    [marginRate:Oanda\response\Account:private] => 0.02
                )

        )

)

```

### GetAccount

```PHP
$account = $acc->getAccount('9288783');
```

### Returns : 
```PHP
Oanda\response\getAccount\AccountFull Object
(
    [accountId:Oanda\response\getAccount\AccountFull:private] => 9288783
    [accountName:Oanda\response\getAccount\AccountFull:private] => nikopeikrishvili
    [balance:Oanda\response\getAccount\AccountFull:private] => 10000
    [unrealizedPl:Oanda\response\getAccount\AccountFull:private] => 0
    [realizedPl:Oanda\response\getAccount\AccountFull:private] => 0
    [marginUsed:Oanda\response\getAccount\AccountFull:private] => 0
    [marginAvail:Oanda\response\getAccount\AccountFull:private] => 10000
    [openTrades:Oanda\response\getAccount\AccountFull:private] => 0
    [openOrders:Oanda\response\getAccount\AccountFull:private] => 0
    [marginRate:Oanda\response\getAccount\AccountFull:private] => 0.02
    [accountCurrency:Oanda\response\getAccount\AccountFull:private] => USD
)

```
