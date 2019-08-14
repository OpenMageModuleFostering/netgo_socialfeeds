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
class Netgo_Socialfeeds_Model_Resource_Socialfeed_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    protected $_joinedFields = array();

    /**
     * constructor
     *
     * @access public
     * @return void
     * @author NetGo
     */
    protected function _construct()
    {
        parent::_construct();
        $this->_init('netgo_socialfeeds/socialfeed');
    }

    /**
     * get socialfeeds as array
     *
     * @access protected
     * @param string $valueField
     * @param string $labelField
     * @param array $additional
     * @return array
     * @author NetGo
     */
    protected function _toOptionArray($valueField='entity_id', $labelField='socialfeeds_status', $additional=array())
    {
        return parent::_toOptionArray($valueField, $labelField, $additional);
    }

    /**
     * get options hash
     *
     * @access protected
     * @param string $valueField
     * @param string $labelField
     * @return array
     * @author NetGo
     */
    protected function _toOptionHash($valueField='entity_id', $labelField='socialfeeds_status')
    {
        return parent::_toOptionHash($valueField, $labelField);
    }

    /**
     * Get SQL for get record count.
     * Extra GROUP BY strip added.
     *
     * @access public
     * @return Varien_Db_Select
     * @author NetGo
     */
    public function getSelectCountSql()
    {
        $countSelect = parent::getSelectCountSql();
        $countSelect->reset(Zend_Db_Select::GROUP);
        return $countSelect;
    }
}
