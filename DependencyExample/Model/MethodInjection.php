<?php

declare(strict_types=1);

namespace Training\DependencyExample\Model;

use Magento\Framework\DataObject;

class MethodInjection
{
    // this is called Method Injection
    public function getName(DataObject $dataObject)
    {
        return $dataObject->getData('name');
    }
}
