<?php

use Gii\ModuleService\Enums\EnumServiceFlag;
use Gii\ModuleService\Models\Service;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private $__table;

    public function __construct(){
        $this->__table = app(config('database.models.Service', Service::class));
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        $table_name = $this->__table->getTable();
        if (!Schema::hasTable($table_name)){
            Schema::create($table_name, function (Blueprint $table) {
                $table->id();
                $table->string("name");
                $table->unsignedTinyInteger("flag")->default();
                $table->json('props')->nullable();
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists($this->__table->getTable());
    }
};
