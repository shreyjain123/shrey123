<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5a60314b6d5eaRelationshipsToAppointmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('appointments', function(Blueprint $table) {
            if (!Schema::hasColumn('appointments', 'clients_id')) {
                $table->integer('clients_id')->unsigned()->nullable();
                $table->foreign('clients_id', '108660_5a603149a0e98')->references('id')->on('clients')->onDelete('cascade');
                }
                if (!Schema::hasColumn('appointments', 'employee_id')) {
                $table->integer('employee_id')->unsigned()->nullable();
                $table->foreign('employee_id', '108660_5a603149ac74f')->references('id')->on('employees')->onDelete('cascade');
                }
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('appointments', function(Blueprint $table) {
            
        });
    }
}
