<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterAdvisorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_advisors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->integer('user_id')->nullable();
            $table->string('last_name');
           // $table->string('ntn')->nullable();
            //$table->string('cnic')->nullable();
            //$table->string('brand')->nullable();
            $table->string('phone');
            $table->string('address');
            $table->integer('user_id_fk');
            $table->boolean('is_recived')->default(0);
            $table->integer('is_upgrated')->default(0);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('register_advisors');
    }
}
