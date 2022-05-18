<?php

declare(strict_types=1);

namespace Training\DependencyExample\Model;

use Training\DependencyExample\Model\VirtualType\DefaultName;
use Magento\Framework\DataObject;

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
     * @var HeavyOperation
     */
    protected HeavyOperation $heavyOperation;

    /**
     * @var DefaultName
     */
    protected DefaultName $defaultName;

    /**
     * @var Optional|null
     */
    protected Optional $optional;

    /**
     * @var MethodInjection
     */
    protected MethodInjection $methodInjection;

    /**
     * @param InjectableInterface $injectable
     * @param NonInjectableInterfaceFactory $nonInjectableFactory
     * @param AbstractUtil $util
     * @param HeavyOperation $heavyOperation
     * @param DefaultName $defaultName
     * @param Optional $optional
     * @param array $data
     */
    public function __construct(
        InjectableInterface           $injectable,
        NonInjectableInterfaceFactory $nonInjectableFactory,
        AbstractUtil                  $util,
        HeavyOperation                $heavyOperation,
        DefaultName                   $defaultName,
        MethodInjection               $methodInjection,
        Optional                      $optional = null,
        array                         $data = []
    )
    {
        $this->data = $data;
        $this->injectable = $injectable;
        $this->nonInjectableFactory = $nonInjectableFactory;
        $this->util = $util;
        $this->heavyOperation = $heavyOperation;
        $this->defaultName = $defaultName;
        $this->optional = $optional;
        $this->methodInjection = $methodInjection;
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

    /**
     * @return HeavyOperation
     */
    public function getHeavyOperation(): HeavyOperation
    {
        return $this->heavyOperation;
    }

    /**
     * @return DefaultName
     */
    public function getDefaultName(): DefaultName
    {
        return $this->defaultName;
    }

    /**
     * @return Optional|null
     */
    public function getOptional(): ?Optional
    {
        return $this->optional;
    }

    /**
     * @return string
     */
    public function getMethodInjectionName(): string
    {
        // there is no automatic METHOD injection, like Constructors have.
        // to inject DataObject we need to create the Object, then inject in getName().
        $dataObject = new DataObject(['name' => 'Method Injection']);
        return $this->methodInjection->getName($dataObject);
    }
}
