<?php

namespace Domain\ValueObjects;

use Assert\Assertion;
use Assert\AssertionFailedException;
use Illuminate\Support\Facades\Config;


class RequisitionText
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
        Assertion::true(self::isValid($value), 'Invalid Requisition Text');
        $this->value = $value;
    }
    /**
     * @param string $value
     * @return bool
     */

    private function isValid(string $value)
    {
        return strlen($value) > Config::get('constants.text.minLength')
            && strlen($value) > Config::get('constants.text.maxLength');
    }

    public function getText()
    {
        return $this->value;
    }

}
