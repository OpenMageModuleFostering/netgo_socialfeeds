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
class Netgo_Socialfeeds_Model_Socialfeed extends Mage_Core_Model_Abstract
{
    /**
     * Entity code.
     * Can be used as part of method name for entity processing
     */
    const ENTITY    = 'netgo_socialfeeds_socialfeed';
    const CACHE_TAG = 'netgo_socialfeeds_socialfeed';

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'netgo_socialfeeds_socialfeed';

    /**
     * Parameter name in event
     *
     * @var string
     */
    protected $_eventObject = 'socialfeed';

    /**
     * constructor
     *
     * @access public
     * @return void
     * @author NetGo
     */
    public function _construct()
    {
        parent::_construct();
        $this->_init('netgo_socialfeeds/socialfeed');
    }

    /**
     * before save socialfeed
     *
     * @access protected
     * @return Netgo_Socialfeeds_Model_Socialfeed
     * @author NetGo
     */
    protected function _beforeSave()
    {
        parent::_beforeSave();
        $now = Mage::getSingleton('core/date')->gmtDate();
        if ($this->isObjectNew()) {
            $this->setCreatedAt($now);
        }
        $this->setUpdatedAt($now);
        return $this;
    }

    /**
     * get the url to the socialfeed details page
     *
     * @access public
     * @return string
     * @author NetGo
     */
    public function getSocialfeedUrl()
    {
        if ($this->getUrlKey()) {
            $urlKey = '';
            if ($prefix = Mage::getStoreConfig('netgo_socialfeeds/socialfeed/url_prefix')) {
                $urlKey .= $prefix.'/';
            }
            $urlKey .= $this->getUrlKey();
            if ($suffix = Mage::getStoreConfig('netgo_socialfeeds/socialfeed/url_suffix')) {
                $urlKey .= '.'.$suffix;
            }
            return Mage::getUrl('', array('_direct'=>$urlKey));
        }
        return Mage::getUrl('netgo_socialfeeds/socialfeed/view', array('id'=>$this->getId()));
    }

    /**
     * check URL key
     *
     * @access public
     * @param string $urlKey
     * @param bool $active
     * @return mixed
     * @author NetGo
     */
    public function checkUrlKey($urlKey, $active = true)
    {
        return $this->_getResource()->checkUrlKey($urlKey, $active);
    }

    /**
     * save socialfeed relation
     *
     * @access public
     * @return Netgo_Socialfeeds_Model_Socialfeed
     * @author NetGo
     */
    protected function _afterSave()
    {
        return parent::_afterSave();
    }

    /**
     * get default values
     *
     * @access public
     * @return array
     * @author NetGo
     */
    public function getDefaultValues()
    {
        $values = array();
        $values['status'] = 1;
        return $values;
    }
    
}
