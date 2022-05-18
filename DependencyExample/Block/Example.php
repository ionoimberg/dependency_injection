<?php
//Block, Layouts, Templates. Injected Class Main from Model.
// Model -> Block -> Layout -> templates
declare(strict_types=1);

namespace Training\DependencyExample\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Training\DependencyExample\Model\Main;

class Example extends Template //used in layuot dependency_index_index.xml
{
    /**
     * @var Main
     */
    protected Main $main;

    /**
     * @param Context $context
     * @param Main $main
     * @param array $data
     */
    public function __construct(
        Context $context,
        Main    $main,      // (required, has no default value. Required ones always has to be before the optional argument)
        array   $data = [] //optional, because has a default value
    )
    {
        parent::__construct($context, $data);
        $this->main = $main;
    }

    public function getMain(): Main
    {
        return $this->main;
    }
}
