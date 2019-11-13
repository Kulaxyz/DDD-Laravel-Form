<?php


namespace App\Persistanse;

use Domain\Requisition;
use Domain\ValueObjects\RequisitionId;

interface StorageInterface
{
    public function getAll();

    public function getById(RequisitionId $id);

    public function save(Requisition $requisition);

    public function delete(RequisitionId $id);
}
