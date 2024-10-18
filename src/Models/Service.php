<?php

namespace Gii\ModuleService\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Zahzah\LaravelSupport\Models\BaseModel;

class Service extends BaseModel {
    use HasUlids;

    protected $keyType         = "string";
    protected $primaryKey      = "id"; 
    protected $__flags_Service = ['PATIENT_TYPE'];
    protected $fillable        = ['id','name','flag'];

    protected static function booted(): void{
        parent::booted();
        static::addGlobalScope('flagIn',function($query){
            $query->flagIn(self::$__flags_Service);
        });
    }

    public static function setIdentityFlags(array $flags){
        self::$__flags_Service = $flags;
    }

    //EIGER SECTION

    //END EIGER SECTION
}