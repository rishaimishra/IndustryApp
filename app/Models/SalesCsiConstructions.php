<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesCsiConstructions extends Model
{
    use HasFactory;
    protected $table = "csi_construction_service_sales";

    public function product_name()
    {
        return $this->hasOne('App\Models\ServiceCsiConstructions','id','product_id');
    }
}
