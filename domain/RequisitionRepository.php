<?php
namespace Domain;

use App\Persistanse\StorageFactory;
use Illuminate\Support\Facades\Config;

class RequisitionRepository
{
    public function save(Requisition $requisition) : void
    {
        $model = StorageFactory::build(Config::get('constants.system.storage'));
        $model->save($requisition);
    }
}
