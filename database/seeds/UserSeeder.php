<?php


use App\Property\Property;
use App\User;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(User::class, 2)->create()->each(function ($user) {
            $user->properties()->save(factory(Property::class, 100)->make());
        });


    }
}
