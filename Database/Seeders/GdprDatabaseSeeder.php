<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 7405a7d4 (first)
namespace Modules\Gdpr\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class GdprDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");
    }
}
