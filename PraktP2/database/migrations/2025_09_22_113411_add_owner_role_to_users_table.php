<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // ubah kolom role jadi enum baru dengan tambahan 'owner'
            $table->enum('role', ['root', 'admin', 'owner', 'users'])->default('users')->change();
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // rollback ke enum lama tanpa owner
            $table->enum('role', ['root', 'admin', 'users'])->default('users')->change();
        });
    }
};
