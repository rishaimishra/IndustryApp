<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesMlConstructionFdis extends Model
{
    use HasFactory;
    protected $table="ml_construction_fdi_service_sales";

    public function product_name()
    {
        return $this->hasOne('App\Models\ServiceMlConstructionFdis','id','product_id');
    }
}
