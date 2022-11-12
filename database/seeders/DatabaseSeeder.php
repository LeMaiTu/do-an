<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        // User::factory(10)->create();
=======
        $this->call([
            CanBoSeeder::class,
        ]);
>>>>>>> ee85335e6a752fbb55183dc6deb45b762f031226
    }
}
