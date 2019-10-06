<?php
/**
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 */
class MGS_Lookbook_Block_Adminhtml_Lookbook_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('lookbook_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('lookbook')->__('Lookbook Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('lookbook')->__('Lookbook Information'),
          'title'     => Mage::helper('lookbook')->__('Lookbook Information'),
          'content'   => $this->getLayout()->createBlock('lookbook/adminhtml_lookbook_edit_tab_form')->toHtml(),
      ));
     
      return parent::_beforeToHtml();
  }
}