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
     * @var NonInjectableInterfaceFactory
     */
    protected NonInjectableInterfaceFactory $nonInjectableFactory;

    /**
     * @var AbstractUtil
     */
    protected AbstractUtil $util;

    /**
     * @param InjectableInterface $injectable
     * @param NonInjectableInterfaceFactory $nonInjectableFactory
     * @param array $data
     */
    public function __construct(
        InjectableInterface $injectable,
        NonInjectableInterfaceFactory $nonInjectableFactory,
        AbstractUtil $util,
        array $data = []
    )
    {
        $this->data = $data;
        $this->injectable = $injectable;
        $this->nonInjectableFactory = $nonInjectableFactory;
        $this->util = $util;
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
     * @return NonInjectable
     */
    public function getNonInjectable(): NonInjectable
    {
        return $this->nonInjectableFactory->create();
    }

    /**
     * @return AbstractUtil
     */
    public function getUtil(): AbstractUtil
    {
        return $this->util;
    }
}
