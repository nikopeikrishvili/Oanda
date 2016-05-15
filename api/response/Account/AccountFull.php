<?php

namespace Oanda\response\getAccount;

/**
 * Description of AccountFull

  "accountId" : 9288783,
  "accountName" : "nikopeikrishvili",
  "balance" : 10000,
  "unrealizedPl" : 0,
  "realizedPl" : 0,
  "marginUsed" : 0,
  "marginAvail" : 10000,
  "openTrades" : 0,
  "openOrders" : 0,
  "marginRate" : 0.02,
  "accountCurrency" : "USD"

 * @author Niko Peikrishvili
 */
class AccountFull implements \Oanda\response\ResponseInterface
{

    private $accountId;
    private $accountName;
    private $balance;
    private $unrealizedPl;
    private $realizedPl;
    private $marginUsed;
    private $marginAvail;
    private $openTrades;
    private $openOrders;
    private $marginRate;
    private $accountCurrency;

    public function __construct(\stdClass $account)
    {
        $this->accountId = $account->accountId;
        $this->accountName = $account->accountName;
        $this->balance = $account->balance;
        $this->unrealizedPl = $account->unrealizedPl;
        $this->realizedPl = $account->realizedPl;
        $this->marginUsed = $account->marginUsed;
        $this->marginAvail = $account->marginAvail;
        $this->openTrades = $account->openTrades;
        $this->openOrders = $account->openOrders;
        $this->marginRate = $account->marginRate;
        $this->accountCurrency = $account->accountCurrency;
    }

    function getAccountId()
    {
        return $this->accountId;
    }

    function getAccountName()
    {
        return $this->accountName;
    }

    function getBalance()
    {
        return $this->balance;
    }

    function getUnrealizedPl()
    {
        return $this->unrealizedPl;
    }

    function getRealizedPl()
    {
        return $this->realizedPl;
    }

    function getMarginUsed()
    {
        return $this->marginUsed;
    }

    function getMarginAvail()
    {
        return $this->marginAvail;
    }

    function getOpenTrades()
    {
        return $this->openTrades;
    }

    function getOpenOrders()
    {
        return $this->openOrders;
    }

    function getMarginRate()
    {
        return $this->marginRate;
    }

    function getAccountCurrency()
    {
        return $this->accountCurrency;
    }

    function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }

    function setAccountName($accountName)
    {
        $this->accountName = $accountName;
    }

    function setBalance($balance)
    {
        $this->balance = $balance;
    }

    function setUnrealizedPl($unrealizedPl)
    {
        $this->unrealizedPl = $unrealizedPl;
    }

    function setRealizedPl($realizedPl)
    {
        $this->realizedPl = $realizedPl;
    }

    function setMarginUsed($marginUsed)
    {
        $this->marginUsed = $marginUsed;
    }

    function setMarginAvail($marginAvail)
    {
        $this->marginAvail = $marginAvail;
    }

    function setOpenTrades($openTrades)
    {
        $this->openTrades = $openTrades;
    }

    function setOpenOrders($openOrders)
    {
        $this->openOrders = $openOrders;
    }

    function setMarginRate($marginRate)
    {
        $this->marginRate = $marginRate;
    }

    function setAccountCurrency($accountCurrency)
    {
        $this->accountCurrency = $accountCurrency;
    }

}
