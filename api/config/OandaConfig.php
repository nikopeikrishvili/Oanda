<?php
namespace Oanda\config;

/**
 * Description of OandaConfig
 *
 * @author Niko Peikrishvili
 */
class OandaConfig
{
    public  $currentMode = \OandaModes::demo;
   
    public  $config = array(
      \OandaModes::demo => array(
          'url'=>'https://api-fxpractice.oanda.com/v1/',
          'token'=>'70525cdcec08c3f0a0f8a7855ba44cf2-3a24483e03f95b7b2ee9e802d7c5f051',
      ),
      \OandaModes::live=>array(
          'url'=>'',
          'token'=>'',
      )  
    );
    
    
}
