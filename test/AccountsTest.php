<?php

require_once __DIR__.'/../vendor/autoload.php';
/**
 * Description of AccountsTest
 *
 * @author Niko Peikrishvili
 */
class AccountsTest extends PHPUnit_Framework_TestCase
{
    public $account;
    public function setUp()
    {
        parent::setUp();
        
    }
    public function testGetAccount()
    {
        $this->account = new Oanda\methods\Account();
        $result = $this->account->getAccounts();
        $this->assertInstanceOf(\Oanda\response\Accounts::class, $result);
        
    }
}
