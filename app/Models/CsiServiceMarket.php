<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CsiServiceMarket extends Model
{
    use HasFactory;
    protected $table = "csi_sales";

    public function product_name()
    {
        return $this->hasOne('App\Models\CsiService','id','product_id');
    }
}
