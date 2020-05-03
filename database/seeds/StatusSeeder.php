<?php

use App\Property\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create(['title' => 'For Rent']);
        Status::create(['title' => 'For Sale']);
        Status::create(['title' => 'Open House']);
        Status::create(['title' => 'No Fees']);
        Status::create(['title' => 'Hot Offer']);
        Status::create(['title' => 'Sold']);
    }
}
