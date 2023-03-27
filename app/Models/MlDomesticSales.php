<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MlDomesticSales extends Model
{
    use HasFactory;
    protected $table = "ml_domestic_service_sales";

    public function product_name()
    {
        return $this->hasOne('App\Models\MlDomesticService','id','product_id');
    }
}
