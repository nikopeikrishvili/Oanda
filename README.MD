#oanda.com REST API Wrapper on PHP

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

$account = new Account();


```
###Returns : 
```PHP
Oanda\response\Accounts Object

.Oanda\response\Accounts Object
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
