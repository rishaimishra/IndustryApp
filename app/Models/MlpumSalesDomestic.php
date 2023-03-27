<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MlpumSalesDomestic extends Model
{
    use HasFactory;
    protected $table="ml_domestic_pam_sales_domestic";

    public function product_name()
    {
        return $this->hasOne('App\Models\MlpumProduction','id','product_id');
    }
}
