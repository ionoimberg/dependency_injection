<?php

declare(strict_types=1);

namespace Training\DependencyExample\Model;

class Main
{
    /**
     * @var array
     */
    protected array $data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }
    public function getId(): string
    {
        return $this->data['id'];
    }
}
