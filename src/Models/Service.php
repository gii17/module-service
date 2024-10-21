<?php

namespace Gii\ModuleService\Models;

use Gii\ModuleService\Enums\EnumServiceFlag;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Zahzah\LaravelHasProps\Concerns\HasProps;
use Zahzah\LaravelSupport\Concerns\Support\HasSoftDeletes;
use Zahzah\LaravelSupport\Models\BaseModel;

class Service extends BaseModel {
    use HasUlids,HasProps,HasSoftDeletes;

    protected $list                 = ["name","flag"];
    protected $show                 = ["name","flag"];
    public static $__flags_service  = [
        EnumServiceFlag::PATIENT_TYPE->value,
        EnumServiceFlag::MEDIC_SERVICE->value
    ];

    protected static function booted(): void{
        parent::booted();
        static::addGlobalScope('flagIn',function($query){
            $query->flagIn(self::$__flags_service);
        });
    }

    public function scopesetIdentityFlags($builder,array $flags){
        self::$__flags_service = $flags;
    }

    //EIGER SECTION

    //END EIGER SECTION
}