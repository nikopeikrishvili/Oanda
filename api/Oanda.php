<?php

namespace Oanda;

use Oanda\config;

/**
 * Description of Oanda
 *
 * @author Niko Peikrishvili
 */
class Oanda
{

    private $token;
    private $baseUrl;



    public function getToken()
    {
        return $this->token;
    }

    public function getUrl()
    {
        return $this->baseUrl;
    }

    public function __construct(config\OandaConfig $oandaConfig)
    {
         if (!is_callable('curl_init'))
        {
            throw new Exception("You Must enable curl to use this API");
        }
        if (!key_exists($oandaConfig->currentMode, $oandaConfig->config))
        {
            throw new \Oanda\exceptions\OandaException("Invalid Mode", 500);
        }
        if ($oandaConfig->config[$oandaConfig->currentMode]['token'] == '')
        {
            throw new \Oanda\exceptions\OandaException("Token Is Empty", 500);
        }
        $this->token = $oandaConfig->config[$oandaConfig->currentMode]['token'];
        if ($oandaConfig->config[$oandaConfig->currentMode]['url'] == '')
        {
            throw new \Oanda\exceptions\OandaException("Url Is Empty", 500);
        }
        $this->baseUrl = $oandaConfig->config[$oandaConfig->currentMode]['url'];
    }
    
    public function checkAnswer(\Requests_Response $response)
    {
        $answer = json_decode($response->body);
        if($response->status_code!='200')
        {
            throw new exceptions\OandaAnswerException($answer->message,$answer->code);
        }
    }

    

}
