<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admin_ti_emails', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('domain')->nullable();
            $table->string('senha')->nullable();
            $table->string('pop')->nullable();
            $table->string('pop_port')->nullable();
            $table->string('smtp')->nullable();
            $table->string('smtp_port')->nullable();
            $table->string('setor')->nullable();
            $table->string('status')->nullable();
            $table->string('assin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_ti_email');
    }
};
