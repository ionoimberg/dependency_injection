<?php

namespace Training\DependencyExample\Block;

class Link extends \Magento\Framework\View\Element\Html\Link
{
    /**
     * @return string
     */
    protected function _toHtml()
    {
        if ($this->getTemplate()) {
            return parent::_toHtml();
        }
        return '<li><a ' . $this->getLinkAttributes() . '>' . $this->escapeHtml($this->getLabel()) . '</a></li>';
    }
}
