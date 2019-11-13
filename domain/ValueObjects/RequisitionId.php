<?php

namespace Domain\ValueObjects;

use Assert\Assertion;
use Assert\AssertionFailedException;
use Exception;
use Ramsey\Uuid\Uuid;

class RequisitionId
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
        Assertion::true(self::isValid($value), 'Invalid Requisition Id');
        $this->value = $value;
    }

    /**
     * @param string $value
     * @return RequisitionId
     * @throws AssertionFailedException
     */
    public static function fromString($value)
    {
        return new self($value);
    }

    /**
     * @param $value
     * @return RequisitionId
     * @throws AssertionFailedException
     */
    public static function create($value)
    {
        return new self($value);
    }

    /**
     * @return RequisitionId
     * @throws Exception
     * @throws AssertionFailedException
     */

    public static function generate()
    {
        return new self((string)Uuid::uuid4());
    }
    /**
     * @param string $value
     * @return bool
     */
    public static function isValid($value)
    {
        return Uuid::isValid($value);
    }
    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->value;
    }
    /**
     * @param RequisitionId $requisitionId
     * @return bool
     */
    public function equals(RequisitionId $requisitionId)
    {
        if ($this->value === $requisitionId->getValue())
            return true;
        else
            return false;
    }
    /**
     * @return string
     */
    public function getValue()
    {
        return (string)$this->value;
    }
    /**
     * @return string
     */
    public function getType()
    {
        return 'RequisitionID';
    }
}
