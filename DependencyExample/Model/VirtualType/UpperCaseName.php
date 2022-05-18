<?php

declare(strict_types=1);

namespace Training\DependencyExample\Model\VirtualType;

class UpperCaseName extends Name
{
    /**
     * @param string $name
     * @return string
     */
    public function getName(string $name): string
    {
        return strtoupper(parent::getName($name));
    }
}

// inject it instead of Name Class in DefaultName
//create a virtualType in di.xml to display it in Caps without corrupting DefaultName Class