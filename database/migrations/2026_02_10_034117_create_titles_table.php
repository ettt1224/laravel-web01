<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('titles', function (Blueprint $table) {
            $table->id(); // 自動產生 bigInt, primary key, auto_increment
            $table->string('img'); // 對應 SQL 的 img (text 類型在 Laravel 通常用 string 或 text)
            $table->string('text'); // 對應 SQL 的 text
            $table->boolean('sh')->default(0); // 對應 sh (顯示/隱藏)，用 boolean 更直觀 (0=隱藏, 1=顯示)
            $table->timestamps(); // 自動產生 created_at 和 updated_at 時間戳記
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('titles');
    }
};
