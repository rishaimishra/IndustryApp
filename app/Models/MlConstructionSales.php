<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MlConstructionSales extends Model
{
    use HasFactory;
    protected $table = "ml_domestic_construction_service_sales";

    public function product_name()
    {
        return $this->hasOne('App\Models\MlConstructionService','id','product_id');
    }
}
