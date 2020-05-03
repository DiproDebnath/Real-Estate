<?php


use App\Property\Property;
use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       $adminrole = Role::where('name', 'admin')->first();
       $agentrole = Role::where('name', 'agent')->first();
       $buyerrole = Role::where('name', 'buyer')->first();

        $admin =  User::create([
            'name' => "admin",
            'email' => "admin@admin.com",
            'password' => Hash::make('123456'),
        ]);
        $agent =  User::create([
            'name' => "agent",
            'email' => "agent@agent.com",
            'password' => Hash::make('123456'),
        ]);
        $buyer =  User::create([
            'name' => "buyer",
            'email' => "buyer@buyer.com",
            'password' => Hash::make('123456'),
        ]);
        $admin->Roles()->attach($adminrole);
        $agent->Roles()->attach($agentrole);
        $buyer->Roles()->attach($buyerrole);
    }
}
