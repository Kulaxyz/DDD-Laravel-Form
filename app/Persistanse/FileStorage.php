<?php

namespace App\Persistanse;

use Domain\Requisition;
use Domain\ValueObjects\RequisitionId;
use Illuminate\Support\Facades\Storage;

class FileStorage implements StorageInterface
{
    public function save(Requisition $requisition)
    {
        $data = json_encode([
            'Uuid' => $requisition->getId()->getValue(),
            'name' => $requisition->getName()->getName(),
            'phone' => $requisition->getPhone()->getPhone(),
            'text' => $requisition->getText()->getText(),
            'date' => $requisition->getDate(),
        ]);

        Storage::append('requisitions.txt', $data);

    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function delete(RequisitionId $id)
    {
        // TODO: Implement delete() method.
    }

    public function getById(RequisitionId $id)
    {
        // TODO: Implement getById() method.
    }

}
