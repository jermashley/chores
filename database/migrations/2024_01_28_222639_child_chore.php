<?php

use App\Models\Child;
use App\Models\Chore;
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
        Schema::create('child_chore', function (Blueprint $table) {
            $table->foreignIdFor(Child::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Chore::class)->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
