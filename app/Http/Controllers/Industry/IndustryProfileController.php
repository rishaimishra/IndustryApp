<?php

namespace App\Http\Controllers\Industry;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IndustryProfile;
class IndustryProfileController extends Controller
{
    public function index()
    {
        $data = [];
        $data['data'] = IndustryProfile::where('user_id',auth()->user()->id)->get();
        return view('industry_profile.index',$data);
    }

    public function addView()
    {
        return view('industry_profile.add');
    }

    public function insert(Request $request)
    {
        $inser = new IndustryProfile;
        $inser->license_no = $request->license_no;
        $inser->tpn = $request->tpn;
        $inser->business_name = $request->business_name;
        $inser->main_activity = $request->main_activity;
        $inser->activity_details = $request->activity_details;
        $inser->classification = $request->classification;

        $inser->sub_classification = $request->sub_classification;
        $inser->dzongkhag = $request->dzongkhag;
        $inser->gewog = $request->gewog;
        $inser->village = $request->village;


        $inser->exact_location = $request->exact_location;
        $inser->scale_investment = $request->scale_investment;
        $inser->investment_amount = $request->investment_amount;
        $inser->license_issue_date = $request->license_issue_date;

        $inser->license_validity_date = $request->license_validity_date;
        $inser->ownership_type = $request->ownership_type;
        $inser->email = $request->email;
        $inser->mobile = $request->mobile;
        $inser->fixed_line = $request->fixed_line;
        $inser->inspect_one = 'CSI';
        $inser->inspect_two = 'manufacturing';
        $inser->user_id = auth()->user()->id;
        $inser->save();
        return redirect()->route('manage.industry.profile.business.view',['id'=>$inser->id]);
        
    }


    public function businessStatus($id)
    {
        $data = [];
        $data['data'] = IndustryProfile::where('id',$id)->first();
        if ($data['data']->inspect_one=="CSI" && $data['data']->inspect_two=="manufacturing") {
            return view('industry_profile.csi_manufacturing',$data);
        }
        if ($data['data']->inspect_one=="CSI" && $data['data']->inspect_two=="service") {
            return view('industry_profile.csi_service',$data);
        }
        if ($data['data']->inspect_one=="CSI" && $data['data']->inspect_two=="contract") {
            return view('industry_profile.csi_service',$data);
        }

        if ($data['data']->inspect_one=="ML" && $data['data']->inspect_two=="pam") {
            return view('industry_profile.ml_pam',$data);
        }

        if ($data['data']->inspect_one=="ML" && $data['data']->inspect_two=="service") {
            return view('industry_profile.ml_service',$data);
        }

        if ($data['data']->inspect_one=="ML" && $data['data']->inspect_two=="construction") {
            return view('industry_profile.ml_service',$data);
        }
    }

    public function csiManuUpdate(Request $request)
    {

        // return $request;
        IndustryProfile::where('id',$request->id)->update([
            'business_status'=>$request->csi_manufacturing_business_status,
            'date_of_commercial'=>$request->csi_manufacturing_date_of_commercial,
            'installer_production_capacity'=>$request->csi_manufacturing_installer_production_capacity,
            'total_investment'=>$request->csi_manufacturing_total_investment,
            'specify'=>$request->csi_manufacturing_specify
        ]); 
        return redirect()->back()->with('success','Data Updated Successfully');
    }

    public function mlPamUpdate(Request $request)
    {
       // return $request; 
        IndustryProfile::where('id',$request->id)->update([
            'business_status'=>$request->ml_business_status,
            'date_of_commercial'=>$request->ml_date_of_commercial,
            'installer_production_capacity'=>$request->ml_installer_production_capacity,
            'total_investment'=>$request->ml_total_investment,
            'specify'=>$request->ml_specify,
            'approved_producion_capacity'=>$request->ml_approved_producion_capacity
        ]); 
        return redirect()->back()->with('success','Data Updated Successfully');
    }


    public function edit($id)
    {
        $data = [];
        $data['data'] = IndustryProfile::where('id',$id)->first();
        return view('industry_profile.edit',$data);
    }

    public function update(Request $request)
    {
        IndustryProfile::where('id',$request->id)->update([
       'license_no' => $request->license_no,
       'tpn' => $request->tpn,
       'business_name' => $request->business_name,
       'main_activity' => $request->main_activity,
       'activity_details' => $request->activity_details,
       'classification' => $request->classification,

       'sub_classification' => $request->sub_classification,
       'dzongkhag' => $request->dzongkhag,
       'gewog' => $request->gewog,
       'village' => $request->village,


       'exact_location' => $request->exact_location,
       'scale_investment' => $request->scale_investment,
       'investment_amount' => $request->investment_amount,
       'license_issue_date' => $request->license_issue_date,

        'license_validity_date' => $request->license_validity_date,
        'ownership_type' => $request->ownership_type,
        'email' => $request->email,
        'mobile' => $request->mobile,
        'fixed_line' => $request->fixed_line,
        'inspect_one' => 'CSI',
        'inspect_two' => 'manufacturing',
        'user_id' => auth()->user()->id,

        ]);
        return redirect()->back()->with('success','Data Updated Successfully');
    }
    


}
