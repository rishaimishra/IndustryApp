<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CsiPamFdiSales extends Model
{
    use HasFactory;
    protected $table = "csi_fdi_pam_sales_export";

    public function product_name()
    {
        return $this->hasOne('App\Models\CsiPamFdiProduction','id','product_id');
    }
}
