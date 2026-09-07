<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        if (! Schema::hasTable('front_previews')) {
            return;
        }

        DB::table('front_previews')->update([
            'url' => rtrim(env('APP_URL', 'https://eateryeng-production.up.railway.app'), '/') . '/',
        ]);
    }

    public function down()
    {
        if (! Schema::hasTable('front_previews')) {
            return;
        }

        DB::table('front_previews')->update([
            'url' => 'http://localhost:8000/',
        ]);
    }
};
