<?php

use App\Property\PropertyCategory;
use Illuminate\Database\Seeder;

class PropertyCatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      PropertyCategory::create([ 'category' =>  'Office']);
      PropertyCategory::create([ 'category' =>  'House']);
      PropertyCategory::create([ 'category' =>  'Apartment']);
    }
}
