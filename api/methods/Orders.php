<?php

namespace Oanda\methods;

require_once __DIR__ . '/../../vendor/autoload.php';

/**
 * Description of Orders
 *
 * @author Niko Peikrishvili
 */
class Orders extends \Oanda\Oanda
{

    public function __construct($url,$token)
    {

        parent::__construct($url,$token);
    }

    /**
     * Create new order
     * 
     * @param type $instrument
     * @param type $units
     * @param type $side
     * @param type $type
     * @param type $expire
     * @param type $price
     * @param type $lowerBound
     * @param type $upperBound
     * @param type $stopLoss
     * @param type $takeProfit
     * @param type $trailingStop
     * @return type
     */
    public function openOrder($accountId, $instrument, $units, $side, $type, $expire = false, $price = false, $lowerBound = false, $upperBound = false, $stopLoss = false, $takeProfit = false, $trailingStop = false)
    {
        $headers = array('Authorization' => 'Bearer ' . $this->getToken());

        $data = array();
        $data['instrument'] = $instrument;
        $data['units'] = $units;
        $data['side'] = $side;
        $data['type'] = $type;
        $data['expire'] = $expire;
        $data['price'] = $price;
        $data['lowerBound'] = $lowerBound;
        $data['upperBound'] = $upperBound;
        $data['stopLoss'] = $stopLoss;
        $data['takeProfit'] = $takeProfit;
        $data['trailingStop'] = $trailingStop;
        foreach ($data as &$d)
        {
            print_r($d);
            if (!$d)
            {
                unset($d);
            }
        }
        $response = \Requests::post($this->getUrl() . '/accounts/' . $accountId . '/orders', $headers, $data);
        $this->checkAnswer($response);
        return $response;
    }

    public function getPendingOrders($accountId, $maxId = 0, $count = 50, $instrument = 'all', array $ids = array())
    {
        $data = array();
        if ($maxId > 0)
        {
            $data['maxId'] = $maxId;
        }
        $data['amount'] = $count;
        $data['instrument'] = $instrument;
        $data['ids'] = implode("%2C", $ids);
        $orders = \Requests::get($this->getUrl() . '/accounts/' . $accountId . '/orders', array('Authorization' => 'Bearer ' . $this->getToken()), $data);
        $this->checkAnswer($orders);
        return $orders;
    }

    public function getOrderInfo($accountId, $orderId)
    {

        $order = \Requests::patch($this->getUrl() . 'accounts/' . $accountId . '/orders/' . $orderId, array('Authorization' => 'Bearer ' . $this->getToken(),'Content-Type'=>'application/json'));
        //$this->checkAnswer($order);
        print_r($order->headers);
        return $order;
    }

}
