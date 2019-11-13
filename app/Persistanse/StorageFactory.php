<?php
namespace App\Persistanse;

use App\Persistanse\DatabaseStorage;

class StorageFactory
{
    public static function build($type)
    {
        $storage = 'App\Persistanse\\' . $type . 'Storage';
            return new $storage();
    }
}
