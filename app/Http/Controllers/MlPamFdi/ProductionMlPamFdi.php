<?php

namespace App\Http\Controllers\MlPamFdi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Time;
use App\Models\MlPamFdiSalesExport;
use App\Models\MlPamFdiSalesDomestic;
use App\Models\MlPamFdiProduction;
class ProductionMlPamFdi extends Controller
{
    public function index()
    {
        $data = [];
        $dt = date('Y-m-d');
        $get_time_data = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','H')->first();
        $year = $get_time_data->year;
        $data['year'] = $get_time_data;
        
        $year_data = MlPamFdiProduction::where('year',$year)->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->where('status','!=','IP')->where('type','H')->where('parent_delete_id','0')->get();

        if (count($year_data)>0) {
            // return $year_data;
           $data['data'] = MlPamFdiProduction::where('year',$year)->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->where('status','!=','IP')->where('status','!=','D')->where('type','H')->where('parent_delete_id','0')->get();
        }else{
            
            $previous_year = MlPamFdiProduction::where('user_id',auth()->user()->id)->where('year','<',$year)->where('profile_id',auth()->user()->current_profile)->latest('year')->first();

            
            
            if ($previous_year!="") {
            
            $previous_year1 = MlPamFdiProduction::where('status','!=','D')->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('year',$previous_year->year)->where('profile_id',auth()->user()->current_profile)->where('type','Y')->pluck('id')->toArray();

            



            

            // $previous_year_delete_data_yearly = MlpumProduction::where('status','D')->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('year',$previous_year->year)->where('profile_id',auth()->user()->current_profile)->pluck('parent_delete_id')->toArray();



            // $previous_year = array_diff($previous_year1,$previous_year_delete_data_yearly);

            // return $previous_year;

            // return $previous_year;
            $new_year_in_progress = MlPamFdiProduction::where('status','IP')->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('year',$year)->where('profile_id',auth()->user()->current_profile)->pluck('id')->toArray();
            // return $new_year_in_progress;
            
            $parent_delete_id =  MlPamFdiProduction::where('status','D')->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('year',$year)->where('parent_delete_id','!=','0')->where('profile_id',auth()->user()->current_profile)->pluck('parent_delete_id')->toArray();
           

             $array_merge = array_merge($previous_year1,$new_year_in_progress);


             $final_ids = array_diff($array_merge, $parent_delete_id);
             $data['data'] = MlPamFdiProduction::whereIn('id',$final_ids)->get();

                
            }else{
                $data['data'] = MlPamFdiProduction::where('id',0)->get();
            }
        }

        return view('ml_pam_fdi_half.production.index',$data);
    }

    public function save_next(Request $request)
    {
        if (@$request->addmore) {
            foreach(@$request->addmore as $value)
            {
                // return $value['product'];
                $MlpumProduction = new MlPamFdiProduction;
                $MlpumProduction->year = $request->year;
                $MlpumProduction->product = $value['product'];
                $MlpumProduction->unit = $value['unit'];
                $MlpumProduction->quantity = $value['quantity'];
                $MlpumProduction->price = $value['price'];
                $MlpumProduction->capacity = $value['capacity'];
                $MlpumProduction->user_id = auth()->user()->id;
                $MlpumProduction->profile_id = auth()->user()->current_profile;
                $MlpumProduction->status = 'AA';
                $MlpumProduction->save();

                $domestic = new MlPamFdiSalesDomestic;
                $domestic->profile_id = auth()->user()->current_profile;
                $domestic->user_id = auth()->user()->id;
                $domestic->product_id = $MlpumProduction->id;
                $domestic->status = 'IP';
                $domestic->year = $request->year;
                $domestic->save();

                $export = new MlPamFdiSalesExport;
                $export->profile_id = auth()->user()->current_profile;
                $export->user_id = auth()->user()->id;
                $export->product_id = $MlpumProduction->id;
                $export->status = 'IP';
                $export->year = $request->year;
                $export->save();
            }
        }
        if (@$request->type_submission=="S") {
            return redirect()->back()->with('success','Data Saved Successfully');
        }else{
            return redirect()->route('manage.sales.domestic.ml-pam-fdi');
        }
    }

    public function add()
    {
        $data = [];
        $data['get_time_data'] = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','H')->first();
        return view('ml_pam_fdi_half.production.add',$data);
    }

    public function insert(Request $request)
    {

        $get_time_data = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','H')->first();

        $check = MlPamFdiProduction::where('year',$get_time_data->year)->where('user_id',auth()->user()->id)->whereIn('status',['AA','S','D'])->where('parent_delete_id','0')->where('type','H')->where('profile_id',auth()->user()->current_profile)->first();    

        $previous_year = MlPamFdiProduction::whereIn('status',['AA','S'])->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('year','<',$get_time_data->year)->where('type','Y')->where('profile_id',auth()->user()->current_profile)->latest('year')->first();


         





        $MlpumProduction = new MlPamFdiProduction;
        $MlpumProduction->year = $request->year;
        $MlpumProduction->from_month = $request->from_month;
        $MlpumProduction->profile_id = auth()->user()->current_profile;
        $MlpumProduction->end_month = $request->end_month;
        $MlpumProduction->product = $request->product;
        $MlpumProduction->unit = $request->unit;
        $MlpumProduction->quantity = $request->quantity;
        if($check!=""){
            $MlpumProduction->status="AA";
         }
         elseif ($previous_year!="") {

            $MlpumProduction->status="IP";
         }else{
            $MlpumProduction->status="AA";
         }

        $MlpumProduction->price = $request->price;
        $MlpumProduction->capacity = $request->capacity;
        $MlpumProduction->user_id = auth()->user()->id;
        
        $MlpumProduction->save();

                if ($MlpumProduction->status!="IP") {
                $domestic = new MlPamFdiSalesDomestic;
                $domestic->profile_id = auth()->user()->current_profile;
                $domestic->user_id = auth()->user()->id;
                $domestic->product_id = $MlpumProduction->id;
                $domestic->status = 'IP';
                $domestic->year = $request->year;
                $domestic->save();

                $export = new MlPamFdiSalesExport;
                $export->profile_id = auth()->user()->current_profile;
                $export->user_id = auth()->user()->id;
                $export->product_id = $MlpumProduction->id;
                $export->status = 'IP';
                $export->year = $request->year;
                $export->save();
            }
        return redirect()->back()->with('success','Data Saved Successfully');
    }

    public function deleteView($id)
    {
        $data = [];
        $data['data'] = MlPamFdiProduction::where('id',$id)->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        if($data['data']!="")
        {
            return view('ml_pam_fdi_half.production..delete',$data);
        }else{
            return redirect()->back()->with('error','Something Went Wrong');
        }
    }

    public function deleteSubmit(Request $request)
    {
        $details = MlPamFdiProduction::where('id',$request->id)->first();
        $get_time_data = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','H')->first();

        if ($details->year==$get_time_data->year && $details->year!="IP") {
        


        MlPamFdiProduction::where('id',$request->id)->update([
            'status'=>'D',
            'reason'=>$request->reason,
            'delete_date'=>date('Y-m-d')
        ]);

        MlPamFdiSalesDomestic::where('product_id',$request->id)->update(['status'=>'D']);
        MlPamFdiSalesExport::where('product_id',$request->id)->update(['status'=>'D']);


       }else{
            
            $insert = new MlPamFdiProduction;
            $insert->status='D';
            $insert->parent_delete_id=$details->id;
            $insert->year=$get_time_data->year;
            $insert->user_id=auth()->user()->id;
            $insert->profile_id=auth()->user()->current_profile;
            $insert->reason=$request->reason;
            $insert->delete_date=date('Y-m-d');
            $insert->save();
       }
        return redirect()->route('manage.production.manufacture.ml-pam-fdi-production-manufactureing')->with('success','Data Deleted Successfully');
    }

    public function edit($id)
    {
        $data = [];
        $data['data'] = MlPamFdiProduction::where('id',$id)->where('type','H')->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        if($data['data']!="")
        {
            return view('ml_pam_fdi_half.production..edit',$data);
        }else{
            return redirect()->back()->with('error','Something Went Wrong');
        }
    }

    public function update(Request $request)
    {
        $MlpumProduction = [];
        $MlpumProduction['year'] = $request->year;
        $MlpumProduction['from_month'] = $request->from_month;
        $MlpumProduction['end_month'] = $request->end_month;
        $MlpumProduction['product'] = $request->product;
        $MlpumProduction['unit'] = $request->unit;
        $MlpumProduction['quantity'] = $request->quantity;


        $MlpumProduction['price'] = $request->price;
        $MlpumProduction['capacity'] = $request->capacity;
        $MlpumProduction['user_id'] = auth()->user()->id;
        MlPamFdiProduction::where('id',$request->id)->update($MlpumProduction);
        return redirect()->back()->with('success','Data Updated Successfully');
    }
}
