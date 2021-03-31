<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class SetAutoIncrementTables extends Migration
{
    public function up()
    {
        $tables = [
            'users',
            'clients',
            'contacts',
            'addresses',
            'administrators',
            'contracts',
            'emprestimos'
        ];

        if (env('DB_CONNECTION') == 'mysql') {
            foreach ($tables as $table) {
                $statement = "ALTER TABLE  $table  AUTO_INCREMENT = " . now()->year . 1000;
                DB::statement($statement);
            }
        } else if (env('DB_CONNECTION') == 'pgsql') {
            foreach ($tables as $table) {
                $statement = "ALTER SEQUENCE " . $table . "_id_seq RESTART WITH " . now()->year . 1000;
                DB::statement($statement);
            }
        } else {
            foreach ($tables as $table) {
                $statement = "ALTER TABLE  $table  AUTO_INCREMENT = " . now()->year . 1000;
                DB::statement($statement);
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
