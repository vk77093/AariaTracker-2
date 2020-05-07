<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateVisitUpdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      //Schema::enableForeignKeyConstraints();
        Schema::create('visit_updates', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->integer('user_id');
            // $table->string('comp_name');
            // $table->longText('address');
            // $table->bigInteger('mobileNum');
            // $table->string('contact_person');
            // $table->string('designation');
            // $table->string('natureBuss');
            // $table->string('comptbrand');
            // $table->date('dateOfVisit1');
            // $table->string('purposeVisit1');
            // $table->string('remarks1');
            // $table->unsignedBigInteger('trackermasters_id');
            $table->integer('trackermaster_id');
            // $table->foreign('trackermaster_id')->reference('id')->on('trackermasters')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreignId('trackermasters_id')->constrained();

            $table->date('dateOfVisit2')->nullable(true);
           $table->string('purposeVisit2')->nullable(true);
            $table->longText('remarks2')->nullable(true);
            $table->date('dateOfVisit3')->nullable(true);
            $table->string('purposeVisit3')->nullable(true);
            $table->longText('remarks3')->nullable(true);
            $table->date('dateOfVisit4')->nullable(true);
            $table->string('purposeVisit4')->nullable(true);
            $table->longText('remarks4')->nullable(true);
            $table->date('dateOfVisit5')->nullable(true);
            $table->string('purposeVisit5')->nullable(true);
            $table->longText('remarks5')->nullable(true);
            $table->date('dateOfVisit6')->nullable(true);
            $table->string('purposeVisit6')->nullable(true);
            $table->longText('remarks6')->nullable(true);
            $table->date('dateOfVisit7')->nullable(true);
            $table->string('purposeVisit7')->nullable(true);
            $table->longText('remarks7')->nullable(true);
            $table->date('dateOfVisit8')->nullable(true);
            $table->string('purposeVisit8')->nullable(true);
            $table->longText('remarks8')->nullable(true);
            $table->longText('remarks9')->nullable(true);
            $table->string('status')->nullable(true);
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
        Schema::dropIfExists('visit_updates');
    }
}
