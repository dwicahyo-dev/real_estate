<?php

use App\PropertyType;
use Illuminate\Database\Seeder;

class PropertyTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $propertyTypes = [
            'House', 'Land'
        ];

        foreach ($propertyTypes as $propertyType) {
            PropertyType::create([
                'name' => $propertyType
            ]);
        }
    }
}
