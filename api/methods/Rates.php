<?php
namespace Oanda\methods;
require_once __DIR__.'/../../vendor/autoload.php';

/**
 * Description of Rates
 *
 * @author Niko Peikrishvili
 */
class Rates extends \Oanda\Oanda
{
   
    
    public function __construct()
    {
        parent::__construct(new \Oanda\config\OandaConfig());
    }
    /**
     * 
     *      Get a list of tradeable instruments (currency pairs, CFDs, and commodities)
     *  that are available for trading with the account specified.
     * 
     * 
     * 
     * @param type $accountId   -  Required The account id to fetch the list of tradeable instruments for.
     * @param array $fields     -  Optional An URL encoded (%2C) comma separated list of instrument
     *                           fields that are to be returned in the response. 
     *                           The instrument field will be returned regardless of the input to this query parameter.
     *                           Please see the Response Parameters section below for a list of valid values.
     * 
     * @param array $instuments - Optional An URL encoded (%2C) comma separated list of instruments
     *                            that are to be returned in the response.
     *                            If the instruments option is not specified, all instruments will be returned.
     */
    public function getInstrumentsList($accountId,array $fields=array(),array $instuments=array())
    {
        
    }
}
