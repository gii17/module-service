<?php

namespace Gii\ModuleService\Services;

use Zahzah\LaravelSupport\Supports\PackageManagement;

class Service extends PackageManagement {
    public function index() {
        $this->ServiceModel()->get();
    }
} 