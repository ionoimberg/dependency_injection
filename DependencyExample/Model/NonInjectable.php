<?php

declare(strict_types=1);

namespace Training\DependencyExample\Model;

class NonInjectable implements NonInjectableInterface
{
    /**
     * @return string
     */
    public function getId(): string
    {
        return 'Class Non-Injectable. Implements Inteface';
    }
}
