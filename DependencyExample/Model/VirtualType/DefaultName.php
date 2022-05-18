<?php

declare(strict_types=1);

namespace Training\DependencyExample\Model\VirtualType;

class DefaultName
{
    /**
     * @var Name
     */
    protected Name $name;

    /**
     * @param Name $name
     */
    // Name Class Injected here.
    // Add a virtualType in di.xml file to inject UpperCaseName Class
    public function __construct(Name $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name->getName('Default Name');
    }
}
