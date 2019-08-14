<?php
/**
 * @category Mxperts
 * @package Mxperts_NoRegion
 * @authors TMEDIA cross communications <info@tmedia.de>, Johannes Teitge <teitge@tmedia.de>, Igor Jankovic <jankovic@tmedia.de>, Daniel Sasse <daniel.sasse@golox.eu>
 * @developer Daniel Sasse <sasse@mxperts.de>  
 * @copyright TMEDIA cross communications, Doris Teitge-Seifert
 * @license http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)                 
 */ 
class Mxperts_NoRegion_Helper_Data extends Mage_Core_Helper_Abstract
{
    
	const XML_PATH_ENABLED   = 'customer/noregion/enabled';

    public function isEnabled()
    {
        return Mage::getStoreConfig( self::XML_PATH_ENABLED );
    }
    
}