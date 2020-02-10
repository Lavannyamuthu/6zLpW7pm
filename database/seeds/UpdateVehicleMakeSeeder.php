<?php

use Illuminate\Database\Seeder;
use App\Models\VehicleMakes;

class UpdateVehicleMakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $models = ['Dodge', 'Toyota'];
        foreach ($models as $model) {
            VehicleMakes::updateOrCreate([
                'title' => $model
            ]);
        }
    }
}
