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
     * @var NonInjectableFactory
     */
    protected NonInjectableFactory $nonInjectableFactory;

    /**
     * @param Injectable $injectable
     * @param array $data
     */
    public function __construct(
        Injectable $injectable,
        NonInjectableFactory $nonInjectableFactory,
        array $data = []
    )
    {
        $this->data = $data;
        $this->injectable = $injectable;
        $this->nonInjectableFactory = $nonInjectableFactory;
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

    /**
     * @return NonInjectableFactory
     */
    public function getNonInjectable(): NonInjectable
    {
        return $this->nonInjectableFactory->create();
    }
}
