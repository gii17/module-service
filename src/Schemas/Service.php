<?php

namespace Gii\ModuleService\Schemas;

use Zahzah\LaravelFeature\Supports\BaseLaravelFeature;

class Service extends BaseLaravelFeature{
    protected array $__guard   = ['id']; 
    protected array $__add     = ['name','flag'];
    protected string $__entity = 'Service'; 

    public function addOrChange(? array $attributes=[]): self{    
        $this->updateOrCreate($attributes);
        return $this;
    }   
}