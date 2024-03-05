<?php

use App\Enums\BookingType;
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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("slug");
            $table->text("description");
            $table->integer("numberOfSeats");
            $table->float("price");
            $table->timestamp("date");
            $table->string("location");
            $table->boolean("isFull")->default(false);
            $table->string("bookingType")->default(BookingType::AUTOMATIC->value);
            $table->foreignId("category_id")
                ->constrained("categories")
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId("organiser_id")
                ->references("id")->on("organisers");
            $table->boolean("isVerified")->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
