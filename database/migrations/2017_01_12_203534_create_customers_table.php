<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
                Schema::create('customers', function (Blueprint $table) {
            $table->increments('cid');
            $table->integer('s_no');        
            $table->string('name')->nullable();
            $table->string('email');
            $table->string('password');
        });
        
        
        DB::table('customers')->insert(
            array(
                    'cid'=> '2',
                    'name' => 'Neo',
                    's_no' => '11',
                    'email' => 'name@domain.com',
                    'password' => 'neo'
                )
        );

        DB::table('customers')->insert(
            array(
                    'name' => 'Trinity',
                    's_no' => '11',
                    'email' => 'name@domain.com',
                    'password' => 'Trinneo'
                )
        );
        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
         Schema::drop('customers');
    }
}
