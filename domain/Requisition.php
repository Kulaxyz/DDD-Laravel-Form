<?php

namespace Domain;

use Domain\ValueObjects\RequisitionId;
use Domain\ValueObjects\RequisitionName;
use Domain\ValueObjects\RequisitionPhone;
use Domain\ValueObjects\RequisitionText;
use Carbon\Carbon;

class Requisition
{
    /** @var  RequisitionId */
    private $id;
    /** @var  RequisitionText */
    private $text;
    /** @var  RequisitionPhone */
    private $phone;
    /** @var  RequisitionName */
    private $name;
    /** @var  Carbon */
    private $date;


    /**
     * Requisition constructor.
     * @param RequisitionId $id
     * @param RequisitionPhone $phone
     * @param RequisitionText $text
     * @param RequisitionName $name
     */

    public function __construct(
        RequisitionId $id,
        RequisitionPhone $phone,
        RequisitionText $text,
        RequisitionName $name
    )
    {
        $this->id = $id;
        $this->text = $text;
        $this->phone = $phone;
        $this->name = $name;
        $this->date = Carbon::now();
    }

    /**
     *
     * @return RequisitionId
     */

    public function getId()
    {
        return $this->id;
    }

    /**
     *
     * @return RequisitionText
     */

    public function getText()
    {
        return $this->text;
    }
    /**
     *
     * @return RequisitionName
     */

    public function getName()
    {
        return $this->name;
    }

    /**
     *
     * @return RequisitionPhone
     */

    public function getPhone()
    {
        return $this->phone;
    }
    /**
     *
     * @return Carbon
     */

    public function getDate()
    {
        return $this->date;
    }
}
