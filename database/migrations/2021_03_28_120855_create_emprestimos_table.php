<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmprestimosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emprestimos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('contract_id');
            $table->unsignedBigInteger('administrator_id');

            $table->double('amount');
            $table->double('juros');
            $table->string('limitepagamento');
            $table->integer('pestacoes');

            $table->timestamps();

            $table->foreign('contract_id')
                ->references('id')
                ->on('contracts')
                ->onDelete('cascade');

            $table->foreign('administrator_id')
                ->references('id')
                ->on('administrators')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('emprestimos', function (Blueprint $table) {
            $table->dropForeign('emprestimos_contracts_id_foreign');
        });
        Schema::table('administrators', function (Blueprint $table) {
            $table->dropForeign('administrators_administrator_id_foreign');
        });
        Schema::dropIfExists('emprestimos');
    }
}
