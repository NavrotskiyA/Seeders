<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LabelTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('label_task', function (Blueprint $table) {
            $table->bigInteger('task_id')->unsigned();
            $table->bigInteger('label_id')->unsigned();
            $table->foreign('task_id', 'Task_id_in_tasks')->references('id')->on('tasks');
            $table->foreign('label_id', 'Label_id_in_labels')->references('id')->on('labels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('label_task');
    }
}
