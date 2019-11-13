<?php

namespace Domain\ValueObjects;

use Assert\Assertion;
use Assert\AssertionFailedException;
use Illuminate\Support\Facades\Config;

class RequisitionPhone
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
        Assertion::true(self::isValid($value), 'Invalid Requisition Phone');
        $this->value = $value;
    }

    /**
     * @param string $value
     * @return bool
     */

    public function isValid($value)
    {
        return preg_match(Config::get('constants.phone.pattern'), $value) && strlen($value) >= 10;
    }

    public function getPhone()
    {
        return $this->value;
    }

}
