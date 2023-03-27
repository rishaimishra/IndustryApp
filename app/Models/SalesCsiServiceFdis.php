<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesCsiServiceFdis extends Model
{
    use HasFactory;
    protected $table = "csi_service_fdi_service_sales";

    public function product_name()
    {
        return $this->hasOne('App\Models\ServiceCsiServiceFdis','id','product_id');
    }
}
