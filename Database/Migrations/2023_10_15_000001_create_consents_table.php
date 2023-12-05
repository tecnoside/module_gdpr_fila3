<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

class CreateConsentsTable extends XotBaseMigration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // -- CREATE --

        $this->tableCreate(
            function (Blueprint $table): void {
                $table->uuid('id')->primary();
                $table->uuid('treatment_id');
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4a1eeab7 (Lint)
                // $table->foreignId('treatment_id')->nullable()->index();
                $table->string('subject_id');
                $table->timestamps();
                // $table->unique(['subject_id', 'treatment_id']);

                // $table->foreign('treatment_id')->references('id')->on('gdpr_treatment');
<<<<<<< HEAD
=======
                $table->string('subject_id');
                $table->timestamps();

                $table->unique(['subject_id', 'treatment_id']);

                $table->foreign('treatment_id')->references('id')->on('gdpr_treatment');
>>>>>>> 7405a7d4 (first)
=======
>>>>>>> 4a1eeab7 (Lint)
            }
        );

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                // if (! $this->hasColumn('email')) {
                //    $table->string('email')->nullable();
                // }
            }
        );
    }
}
