<?php

namespace Domain\ValueObjects;

use Assert\Assertion;
use Assert\AssertionFailedException;


class RequisitionName
{
    /**
     * @var string
     */
    private $value;

    /**
     * @param string $value
     * @throws AssertionFailedException
     */
    public function __construct($value)
    {
        Assertion::string($value);
        $this->value = $value;
    }
    public function getName()
    {
        return $this->value;
    }

}
