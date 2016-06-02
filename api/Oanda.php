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

    public function __construct($url,$token)
    {
        $this->baseUrl = $url;
        $this->token = $token;
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
