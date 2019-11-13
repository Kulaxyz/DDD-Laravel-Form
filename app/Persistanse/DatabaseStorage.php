<?php
namespace App\Persistanse;

use Domain\Requisition;
use Domain\ValueObjects\RequisitionId;
use Illuminate\Support\Facades\DB;

class DatabaseStorage implements StorageInterface
{
    public function save(Requisition $requisition)
    {
        DB::insert('insert into requisition (Uuid, name, text, phone, created_at) values (?, ?, ?, ?, ?)', [
            $requisition->getId()->getValue(),
            $requisition->getName()->getName(),
            $requisition->getText()->getText(),
            $requisition->getPhone()->getPhone(),
            $requisition->getDate()
        ]);
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
