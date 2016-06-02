<?php
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
        $this->account = new Oanda\methods\Account('https://api-fxpractice.oanda.com/v1/','70525cdcec08c3f0a0f8a7855ba44cf2-3a24483e03f95b7b2ee9e802d7c5f051');
    }

    /**
     * @test
     */
    public function testGetAccountsMethodIfIsIntanceOfAccounts()
    {
        $result = $this->account->getAccounts();
        $this->assertInstanceOf('\Oanda\response\getAccounts\Accounts', $result);
    }
    
    /**
     * @test
     */
    public function testGetAccountMetshodIfIsIntanceOfAccountFull()
    {
        $result = $this->account->getAccount('9288783');
        $this->assertInstanceOf('\Oanda\response\getAccount\AccountFull', $result);
    }

}
