<?php
namespace Domain;

use Assert\AssertionFailedException;
use Domain\ValueObjects\RequisitionId;
use Domain\ValueObjects\RequisitionName;
use Domain\ValueObjects\RequisitionPhone;
use Domain\ValueObjects\RequisitionText;
use Illuminate\Http\Request;

class RequisitionService
{
    private $requisitionRepositiry;

    public function __construct(RequisitionRepository $repository)
    {
        $this->requisitionRepositiry = $repository;
    }

    public function create(Request $request)
    {
            $requisition = new Requisition(
                RequisitionId::generate(),
                new RequisitionPhone($request->post('phone')),
                new RequisitionText($request->post('text')),
                new RequisitionName($request->post('name'))
            );

            $this->requisitionRepositiry->save($requisition);
    }
}
