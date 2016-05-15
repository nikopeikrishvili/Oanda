<?php

namespace Oanda\response;

/**
 * Description of Accounts
 *
 * @author Niko Peikrishvili
 */
class Accounts implements ResponseInterface
{
    private $accounts = array();
    public function addAccount(\Oanda\response\Account $account)
    {
      $this->accounts[$account->getAccountId()] = $account;   
    }
    public function addAccounts(array $accounts)
    {
        if(count($accounts)>0)
        {
            foreach($accounts as $account)
            {
                
                $this->addAccount(new Account($account));
            }
        }
        else
        {
            throw new \Oanda\exceptions\OandaException("Nothing to add",500);
        }
        return $this;
    }
    public function getAccount($id)
    {
        if(key_exists($id, $this->accounts))
        {
            return $this->accounts[$id];
        }
        throw new \Oanda\exceptions\OandaException("Account with Id ".$id." not found",404);
    }
    public function getAccounts()
    {
        return $this->accounts;
    }
}
