<?php

declare(strict_types=1);

namespace Training\DependencyExample\Model;

class Main
{
    /**
     * @var array
     */
    protected array $data;

    /**
     * @var Injectable 
     */
    protected Injectable $injectable;

    /**
     * @param Injectable $injectable
     * @param array $data
     */
    public function __construct(
        Injectable $injectable,
        array $data = []
    )
    {
        $this->data = $data;
        $this->injectable = $injectable;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->data['id'];
    }

    /**
     * @return Injectable
     */
    public function getInjectable(): Injectable
    {
        return $this->injectable;
    }
}
