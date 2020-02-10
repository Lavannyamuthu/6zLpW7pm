<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehicleModels extends Model
{
  protected $guarded = ['id'];

  /**
   * vehicleMake() - vehicleModel belongsto VehicleMake
   *
   * @return void
   */
  public function vehicleMake()
  {
    return $this->belongsTo('App\Models\VehicleMakes', 'vehicle_make_id');
  }
}
