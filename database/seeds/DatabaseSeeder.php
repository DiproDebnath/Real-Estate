<?php

use App\Property\Property;
use App\User;
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

        factory(User::class, 2)->create()->each(function ($user) {
            $user->properties()->createMany(factory(Property::class, 100)->make()->toArray());
        });

    }
}
