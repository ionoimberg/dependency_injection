<?php

declare(strict_types=1);

namespace Training\DependencyExample\Controller\Index;

use Magento\Framework\App\ActionInterface;

class Index implements ActionInterface
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory 
     */
    protected $_pageFactory;

    /**
     * @param \Magento\Framework\View\Result\PageFactory $pageFactory
     */
    public function __construct(
        \Magento\Framework\View\Result\PageFactory $pageFactory)
    {
        $this->_pageFactory = $pageFactory;
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|\Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $page =  $this->_pageFactory->create();
        $page->getConfig()->getTitle()->set('Dependency Injection in Magento 2');
        return $page;
    }
}
