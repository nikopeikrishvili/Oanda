<?php
require_once __DIR__.'./../vendor/autoload.php';
/**
 * Description of OandaTest
 *
 * @author Niko Peikrishvili
 */
class OandaTest extends PHPUnit_Framework_TestCase
{
    /**
     * if mode is not from list OandaException must called
     * @test
     * @expectedException Oanda\exceptions\OandaException
     * @expectedExceptionMessage Invalid Mode
     * @expectedExceptionCode 500
     */
    public function TestInvalidMode()
    {
        $oandaConfig = new \Oanda\config\OandaConfig();
        $oandaConfig->currentMode = 'demp1';
        $oanda = new Oanda\Oanda($oandaConfig);
    }
    /**
     * If url is empty OandaException must called
     * @test
     * @expectedException  Oanda\exceptions\OandaException
     * @expectedExceptionCode 500
     * @expectedExceptionMessage Url Is Empty
     */
    public function TestEmptyUrl()
    {
        $oandaConfig = new \Oanda\config\OandaConfig();
        $oandaConfig->config[$oandaConfig->currentMode]['url']='';
        $oanda = new Oanda\Oanda($oandaConfig);
        
    }
    /**
     * If url is empty OandaException must called
     * @test
     * @expectedException  Oanda\exceptions\OandaException
     * @expectedExceptionCode 500
     * @expectedExceptionMessage Token Is Empty
     */
    public function TestEmptyToken()
    {
        $oandaConfig = new \Oanda\config\OandaConfig();
        $oandaConfig->config[$oandaConfig->currentMode]['token']='';
        $oanda = new Oanda\Oanda($oandaConfig);
        
    }
    /**
     * @test
     */
    public function TestIfVariablesAreAssigned()
    {
        $oandaConfig = new \Oanda\config\OandaConfig();
        $oanda = new Oanda\Oanda($oandaConfig);
        $this->assertEquals($oandaConfig->config[$oandaConfig->currentMode]['url'], $oanda->getUrl());
        $this->assertEquals($oandaConfig->config[$oandaConfig->currentMode]['token'], $oanda->getToken());
    }
    
}
