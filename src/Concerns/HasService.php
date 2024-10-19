<?php

namespace Gii\ModuleService\Concerns;

trait HasService{
    public function initialieHasService(){
        $this->ServiceModel()::setIdentityFlags($this->__identity_flags);
    }
}