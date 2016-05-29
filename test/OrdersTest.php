<?php

/**
 * Description of OrdersTest
 *
 * @author Niko Peikrishvili
 */
class OrdersTest extends PHPUnit_Framework_TestCase
{
    public $testAccountId = 9288783;
    
    public function testOpenOrder()
    {
       // $order = new Oanda\methods\Orders();
        
        /**
         *  $data['instrument'] = $instrument;
            $data['units'] = $units;
            $data['side'] = $side;
            $data['type']=$type;
            $data['expire'] = $expire;
            $data['price'] = $price;
            $data['lowerBound']= $lowerBound;
            $data['upperBound'] = $upperBound;
            $data['stopLoss'] = $stopLoss;
            $data['takeProfit'] = $takeProfit;
            $data['trailingStop'] = $trailingStop;
         */
        
//            $reustMockery = \Mockery::mock('R')
//            $mock = \Mockery::mock('order');
//            $mock->shouldReceive("openOrder")->once();
//            $orders = $order->openOrder(
//                '9288783','EUR_USD',1,  Oanda\enums\OrderSides::buy,  \Oanda\enums\OrderTypes::market,
//                1
//                );
//                print_r($orders);
//        $this->assertEquals(), \Oanda\enums\OrderTypes::limit);
    }
    /**
     * @test
     * @testdox Temporary function
     */
    public function testGetOrderInfo()
    {
        //$orders = new Oanda\methods\Orders();
        //$pendingOrders = $orders->getOrderInfo($this->testAccountId,'10286797791');
        //print_r($pendingOrders);
    }
}
