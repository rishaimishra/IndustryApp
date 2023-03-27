<?php

namespace App\Http\Controllers\Submission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Production; 
use App\Models\SalesDomestic; 
use App\Models\SalesExport; 
use App\Models\RawMaterial; 
use App\Models\OtherCost; 
use App\Models\Power; 
use App\Models\Cost; 
use App\Models\Employee; 
use App\Models\Time; 

class CsiPamController extends Controller
{
    public function half()
    {
        $data = [];
        $get_time_data = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','H')->first();
        $year = $get_time_data->year;
        $data['production'] = Production::where('user_id',auth()->user()->id)->where('profile_id',auth()->user()->current_profile)->where('status','AA')->where('year',$year)->where('type','H')->count();
        $data['sales_domestic'] = SalesDomestic::where('user_id',auth()->user()->id)->where('profile_id',auth()->user()->current_profile)->where('status','IP')->where('year',$year)->where('type','H')->count();
        $data['sales_export'] = SalesExport::where('user_id',auth()->user()->id)->where('profile_id',auth()->user()->current_profile)->where('status','IP')->where('year',$year)->where('type','H')->count();
        $data['raw_material'] = RawMaterial::where('user_id',auth()->user()->id)->where('profile_id',auth()->user()->current_profile)->where('status','AA')->where('year',$year)->where('type','H')->count();
        $data['currency'] = OtherCost::where('user_id',auth()->user()->id)->where('profile_id',auth()->user()->current_profile)->where('status','AA')->where('year',$year)->where('type','H')->count();
        $data['power'] = Cost::where('user_id',auth()->user()->id)->where('profile_id',auth()->user()->current_profile)->where('status','AA')->where('year',$year)->where('type','H')->count();
        $data['employee'] = Employee::where('user_id',auth()->user()->id)->where('profile_id',auth()->user()->current_profile)->where('status','AA')->where('year',$year)->where('type','H')->count();
        return view('csi_pum_submission.half',$data);
      }

    public function yearly()
    {
        $data = [];
        $get_time_data = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','Y')->first();
        $year = $get_time_data->year;
        $data['production'] = Production::where('user_id',auth()->user()->id)->where('profile_id',auth()->user()->current_profile)->where('status','AA')->where('year',$year)->where('type','Y')->count();
        $data['sales_domestic'] = SalesDomestic::where('user_id',auth()->user()->id)->where('profile_id',auth()->user()->current_profile)->where('status','IP')->where('year',$year)->where('type','Y')->count();
        $data['sales_export'] = SalesExport::where('user_id',auth()->user()->id)->where('profile_id',auth()->user()->current_profile)->where('status','IP')->where('year',$year)->where('type','Y')->count();
        $data['raw_material'] = RawMaterial::where('user_id',auth()->user()->id)->where('profile_id',auth()->user()->current_profile)->where('status','AA')->where('year',$year)->where('type','Y')->count();
        $data['currency'] = OtherCost::where('user_id',auth()->user()->id)->where('profile_id',auth()->user()->current_profile)->where('status','AA')->where('year',$year)->where('type','Y')->count();
        $data['power'] = Cost::where('user_id',auth()->user()->id)->where('profile_id',auth()->user()->current_profile)->where('status','AA')->where('year',$year)->where('type','Y')->count();
        $data['employee'] = Employee::where('user_id',auth()->user()->id)->where('profile_id',auth()->user()->current_profile)->where('status','AA')->where('year',$year)->where('type','Y')->count();
        return view('csi_pum_submission.year',$data);
      }





}
