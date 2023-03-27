<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesMlServiceFdis extends Model
{
    use HasFactory;

    protected $table="ml_service_fdi_service_sales";

    public function product_name()
    {
        return $this->hasOne('App\Models\ServiceMlServiceFdis','id','product_id');
    }
}
