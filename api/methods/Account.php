<?php
namespace Oanda\methods;
require_once __DIR__.'/../../vendor/autoload.php';
/**
 * Description of Account
 *
 * @author Niko Peikrishvili
 */
class Account extends \Oanda\Oanda
{
    public function __construct($url,$token)
    {
        
        parent::__construct($url,$token);
    }
    /**
     *  Get a list of accounts owned by the user
     * 
     * @return \Oanda\response\getAccounts\Accounts
     */
    public function getAccounts()
    {
        $headers = array('Authorization' => 'Bearer '.$this->getToken());
        $response = \Requests::get($this->getUrl().'/accounts/', $headers);
        $this->checkAnswer($response);
        return (new \Oanda\response\getAccounts\Accounts())->addAccounts(json_decode($response->body)->accounts);
    }
    /**
     * Get account information
     * 
     * @param Int $id - Account ID
     * @return \Oanda\response\getAccount\AccountFull
     */
    public function getAccount($id)
    {
        
        $headers = array('Authorization' => 'Bearer '.$this->getToken());
        $response = \Requests::get($this->getUrl().'/accounts/'.$id, $headers);
        $this->checkAnswer($response);
        return new \Oanda\response\getAccount\AccountFull(json_decode($response->body));
    
    }
}
