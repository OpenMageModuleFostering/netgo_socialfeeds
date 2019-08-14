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
 
class Netgo_Socialfeeds_Helper_Socialfeed extends Mage_Core_Helper_Abstract
{
 
	/**
     * check if breadcrumbs can be used
     *
     * @access public
     * @return bool
     * @author NetGo
     */
    public function getCheckMod()
    {
        return Mage::getStoreConfigFlag('netgo_socialfeeds/socialfeed/mod_status');
    }
	
	/**
     * check if breadcrumbs can be used
     *
     * @access public
     * @return bool
     * @author NetGo
     */
    public function getCheckFB()
    {
        return Mage::getStoreConfigFlag('netgo_socialfeeds/fb_socialfeed/fb_status');
    }

	/**
     * check if breadcrumbs can be used
     *
     * @access public
     * @return bool
     * @author NetGo
     */	
    public function getCheckTW()
    {
        return Mage::getStoreConfigFlag('netgo_socialfeeds/tw_socialfeed/tw_status');
    }

	/**
     * check if breadcrumbs can be used
     *
     * @access public
     * @return bool
     * @author NetGo
     */
    public function getCheckIN()
    {
        return Mage::getStoreConfigFlag('netgo_socialfeeds/ins_socialfeed/ins_status');
    }

	/**
     * check if breadcrumbs can be used
     *
     * @access public
     * @return bool
     * @author NetGo
     */
    public function getCheckPI()
    {
        return Mage::getStoreConfigFlag('netgo_socialfeeds/pi_socialfeed/pi_status');
    }

	/**
     * check if breadcrumbs can be used
     *
     * @access public
     * @return bool
     * @author NetGo
     */
    public function getCheckYT()
    {
        return Mage::getStoreConfigFlag('netgo_socialfeeds/yt_socialfeed/yt_status');
    }	
}
