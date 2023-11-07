<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateAccountingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounting', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->string('position');
            $table->decimal('salary', 10, 2);
            $table->integer('children_count');
            $table->integer('experience');
            $table->timestamps();
        });

        // Додавання тестових даних
        DB::table('accounting')->insert([
            [
                'code' => '4681',
                'name' => 'John Doe',
                'position' => 'Accountant',
                'salary' => 20000.00,
                'children_count' => 2,
                'experience' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => '3451',
                'name' => 'John Doe',
                'position' => 'Accountant',
                'salary' => 50000.00,
                'children_count' => 6,
                'experience' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'code' => '9231',
                'name' => 'John Doe',
                'position' => 'Accountant',
                'salary' => 30000.00,
                'children_count' => 1,
                'experience' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'code' => '2351',
                'name' => 'John Doe',
                'position' => 'Accountant',
                'salary' => 70000.00,
                'children_count' => 3,
                'experience' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'code' => '4561',
                'name' => 'John Doe',
                'position' => 'Accountant',
                'salary' => 80000.00,
                'children_count' => 7,
                'experience' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],


        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounting');
    }

};
