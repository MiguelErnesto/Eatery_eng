<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up()
    {
        DB::statement('ALTER TABLE section2s MODIFY description TEXT NOT NULL');
        DB::statement('ALTER TABLE section5s MODIFY map_parameters TEXT NOT NULL');
    }

    public function down()
    {
        DB::statement('ALTER TABLE section2s MODIFY description VARCHAR(255) NOT NULL');
        DB::statement('ALTER TABLE section5s MODIFY map_parameters VARCHAR(255) NOT NULL');
    }
};
