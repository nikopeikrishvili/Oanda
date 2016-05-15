<?php
namespace Oanda\response\getAccounts;

/**
 * Description of OandaAccount
 *
 * @author Niko Peikrishvili
 */
class Account implements \Oanda\response\ResponseInterface
{
    private $accountId;
    private $accountName;
    private $accountCurrency;
    private $marginRate;
    public function __construct(\stdClass $account)
    {
        $this->accountId= $account->accountId;
        $this->accountName= $account->accountName;
        $this->accountCurrency= $account->accountCurrency;
        $this->marginRate= $account->marginRate;
    }
    public function getAccount()
    {
        return $this;
    }
    function getAccountId()
    {
        return $this->accountId;
    }

    function getAccountName()
    {
        return $this->accountName;
    }

    function getAccountCurrency()
    {
        return $this->accountCurrency;
    }

    function getMarginRate()
    {
        return $this->marginRate;
    }

    function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }

    function setAccountName($accountName)
    {
        $this->accountName = $accountName;
    }

    function setAccountCurrency($accountCurrency)
    {
        $this->accountCurrency = $accountCurrency;
    }

    function setMarginRate($marginRate)
    {
        $this->marginRate = $marginRate;
    }

        
}
