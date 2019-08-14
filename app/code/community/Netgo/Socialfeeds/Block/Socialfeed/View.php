<?php
/***************************************
 *** Social Feeds ***
 ***************************************
 *
 * @copyright   Copyright (c) 2015
 * @company     NetAttingo Technologies
 * @package     Netgo_Socialfeeds
 * @author 		NetGo
 * @dev			netattingomails@gmail.com
 *
 */
class Netgo_Socialfeeds_Block_Socialfeed_View extends Mage_Core_Block_Template
{
    /**
     * get the current socialfeed
     *
     * @access public
     * @return mixed (Netgo_Socialfeeds_Model_Socialfeed|null)
     * @author NetGo
     */
    public function getCurrentSocialfeed()
    {
        return Mage::registry('current_socialfeed');
    }
}
