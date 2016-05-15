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
    public function __construct()
    {
        
        parent::__construct(new \Oanda\config\OandaConfig());
    }
    public function getAccounts()
    {
        $headers = array('Authorization' => 'Bearer '.$this->getToken());
        $response = \Requests::get($this->getUrl().'/accounts/', $headers);
        $this->checkAnswer($response);
        return (new \Oanda\response\Accounts())->addAccounts(json_decode($response->body)->accounts);
    }
}
