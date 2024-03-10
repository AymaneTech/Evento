<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
//        Schema::create('organisers', function (Blueprint $table) {
//            $table->inherits('users');
//        });
        DB::statement("CREATE TABLE organisers( )INHERITS(users);");
        DB::statement("ALTER TABLE organisers ADD CONSTRAINT organisers_id_unique UNIQUE (id);");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organisers');
    }
};
