<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateAuditorCommentsTable extends Migration {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
            Schema::create('auditor_comments', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('auditor_id');
                $table->unsignedBigInteger('cooperative_id');
                $table->longText('message');
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()  {
            Schema::dropIfExists('auditor_comments');
        }
    }
