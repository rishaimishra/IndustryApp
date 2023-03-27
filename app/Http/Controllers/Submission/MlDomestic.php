<?php

namespace App\Http\Controllers\Submission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MlpumProduction; 
use App\Models\MlpumSalesDomestic; 
use App\Models\MlpumSalesExport; 
use App\Models\MlpumRaw; 
use App\Models\MlPamCurrency; 
use App\Models\MlPamPower; 
use App\Models\MlPamEmployee; 
use App\Models\Time; 
class MlDomestic extends Controller
{
    public function half()
    {
        $data = [];
        $get_time_data = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','H')->first();
        $year = $get_time_data->year;
        $data['production'] = MlpumProduction::where('user_id',auth()->user()->id)->where('profile_id',auth()->user()->current_profile)->where('status','AA')->where('year',$year)->where('type','H')->count();
        $data['sales_domestic'] = MlpumSalesDomestic::where('user_id',auth()->user()->id)->where('profile_id',auth()->user()->current_profile)->where('status','IP')->where('year',$year)->where('type','H')->count();
        $data['sales_export'] = MlpumSalesExport::where('user_id',auth()->user()->id)->where('profile_id',auth()->user()->current_profile)->where('status','IP')->where('year',$year)->where('type','H')->count();
        $data['raw_material'] = MlpumRaw::where('user_id',auth()->user()->id)->where('profile_id',auth()->user()->current_profile)->where('status','AA')->where('year',$year)->where('type','H')->count();
        $data['currency'] = MlPamCurrency::where('user_id',auth()->user()->id)->where('profile_id',auth()->user()->current_profile)->where('status','AA')->where('year',$year)->where('type','H')->count();
        $data['power'] = MlPamPower::where('user_id',auth()->user()->id)->where('profile_id',auth()->user()->current_profile)->where('status','AA')->where('year',$year)->where('type','H')->count();
        $data['employee'] = MlPamEmployee::where('user_id',auth()->user()->id)->where('profile_id',auth()->user()->current_profile)->where('status','AA')->where('year',$year)->where('type','H')->count();
        return view('csi_pum_submission.ml_pam_domestic_half',$data);
      }

    public function yearly()
    {
        $data = [];
        $get_time_data = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','Y')->first();
        $year = $get_time_data->year;
        $data['production'] = MlpumProduction::where('user_id',auth()->user()->id)->where('profile_id',auth()->user()->current_profile)->where('status','AA')->where('year',$year)->where('type','Y')->count();
        $data['sales_domestic'] = MlpumSalesDomestic::where('user_id',auth()->user()->id)->where('profile_id',auth()->user()->current_profile)->where('status','IP')->where('year',$year)->where('type','Y')->count();
        $data['sales_export'] = MlpumSalesExport::where('user_id',auth()->user()->id)->where('profile_id',auth()->user()->current_profile)->where('status','IP')->where('year',$year)->where('type','Y')->count();
        $data['raw_material'] = MlpumRaw::where('user_id',auth()->user()->id)->where('profile_id',auth()->user()->current_profile)->where('status','AA')->where('year',$year)->where('type','Y')->count();
        $data['currency'] = MlPamCurrency::where('user_id',auth()->user()->id)->where('profile_id',auth()->user()->current_profile)->where('status','AA')->where('year',$year)->where('type','Y')->count();
        $data['power'] = MlPamPower::where('user_id',auth()->user()->id)->where('profile_id',auth()->user()->current_profile)->where('status','AA')->where('year',$year)->where('type','Y')->count();
        $data['employee'] = MlPamEmployee::where('user_id',auth()->user()->id)->where('profile_id',auth()->user()->current_profile)->where('status','AA')->where('year',$year)->where('type','Y')->count();
        return view('csi_pum_submission.ml_pam_domestic_year',$data);
      }
}
