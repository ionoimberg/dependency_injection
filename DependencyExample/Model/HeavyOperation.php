<?php

namespace Training\DependencyExample\Model;

class HeavyOperation
{
    /**
     * @var string
     */
    protected string $name;
    
    public function __construct()
    {
        $this->init();
    }

    /**
     * @return void
     */
    public function init(): void
    {
        $this->name = 'Class HeavyOperation';
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
