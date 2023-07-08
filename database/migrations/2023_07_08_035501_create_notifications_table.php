<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('message');
            $table->boolean('is_read')->default(false);
            $table->string('type');
            $table->unsignedBigInteger('receive_by'); // Add 'receive_by' column
            $table->unsignedBigInteger('sent_by'); // Add 'sent_by' column
            $table->timestamps();

            $table->foreign('receive_by')->references('id')->on('users')->onDelete('cascade'); // Add foreign key constraint
            $table->foreign('sent_by')->references('id')->on('users')->onDelete('cascade'); // Add foreign key constraint
        });
    }

    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
