<?php

namespace Gii\ModuleService\Services;

use Gii\ModuleService\Models\Service as ModelsService;
use Gii\ModuleService\Schemas\Service as SchemasService;
use Illuminate\Database\Eloquent\Collection;
use Zahzah\LaravelSupport\Supports\PackageManagement;

class Service extends PackageManagement {
    public function getDataService() : ?ModelsService {
        return $this->ServiceModel()->get();
    }

    public function getDataServiceById(array $flags, mixed $id) : ?ModelsService {
        return $this->ServiceModel()->setIdentityFlags($flags)->refind($id);
    }

    public function getDataByFlag(array $flags) : ?Collection {
        $service = $this->ServiceModel()->setIdentityFlags($flags)->get();
        return $service;
    }


    public function storeService(array $data) : ?ModelsService {
        return $this->ServiceModel()::updateOrCreate(
            ["id" => request()->id ?? null],
            [
                "name" => $data['name'] ?? request()->name,
                "flag" => $data['flag'] ?? request()->flag,
            ]
        );
    }
} 