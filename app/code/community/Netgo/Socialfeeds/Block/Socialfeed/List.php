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
class Netgo_Socialfeeds_Block_Socialfeed_List extends Mage_Core_Block_Template
{
    /**
     * initialize
     *
     * @access public
     * @author NetGo
     */
    public function __construct()
    {
        parent::__construct();
        $socialfeeds = Mage::getResourceModel('netgo_socialfeeds/socialfeed_collection')
                         ->addFieldToFilter('status', 1);
        $socialfeeds->setOrder('socialfeeds_status', 'asc');
        $this->setSocialfeeds($socialfeeds);
    }

    /**
     * prepare the layout
     *
     * @access protected
     * @return Netgo_Socialfeeds_Block_Socialfeed_List
     * @author NetGo
     */
    protected function _prepareLayout()
    {
        parent::_prepareLayout();
        $pager = $this->getLayout()->createBlock(
            'page/html_pager',
            'netgo_socialfeeds.socialfeed.html.pager'
        )
        ->setCollection($this->getSocialfeeds());
        $this->setChild('pager', $pager);
        $this->getSocialfeeds()->load();
        return $this;
    }

    /**
     * get the pager html
     *
     * @access public
     * @return string
     * @author NetGo
     */
    public function getPagerHtml()
    {
        return $this->getChildHtml('pager');
    }
}
