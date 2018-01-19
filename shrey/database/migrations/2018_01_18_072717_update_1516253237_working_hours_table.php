<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1516253237WorkingHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('working_hours', function (Blueprint $table) {
            if(Schema::hasColumn('working_hours', 'finish_time')) {
                $table->dropColumn('finish_time');
            }
            
        });
Schema::table('working_hours', function (Blueprint $table) {
            
if (!Schema::hasColumn('working_hours', 'finish_time')) {
                $table->time('finish_time')->nullable();
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
        Schema::table('working_hours', function (Blueprint $table) {
            $table->dropColumn('finish_time');
            
        });
Schema::table('working_hours', function (Blueprint $table) {
                        $table->string('finish_time')->nullable();
                
        });

    }
}
