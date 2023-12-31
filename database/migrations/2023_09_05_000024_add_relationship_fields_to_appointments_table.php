<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToAppointmentsTable extends Migration
{
    public function up()
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->unsignedBigInteger('client_id')->nullable();
            $table->foreign('client_id', 'client_fk_8960633')->references('id')->on('clients');
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->foreign('employee_id', 'employee_fk_8960634')->references('id')->on('employees');
        });
    }
}
