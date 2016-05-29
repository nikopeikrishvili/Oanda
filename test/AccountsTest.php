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
        $this->account = new Oanda\methods\Account();
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
