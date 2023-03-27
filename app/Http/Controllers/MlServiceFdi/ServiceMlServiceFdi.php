<?php

namespace App\Http\Controllers\MlServiceFdi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Time;
use App\Models\ServiceMlServiceFdis;
use App\Models\SalesMlServiceFdis;
class ServiceMlServiceFdi extends Controller
{
    public function index()
    {
        $data = [];
        $dt = date('Y-m-d');
        $get_time_data = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','H')->first();
        $year = $get_time_data->year;
        $data['year'] = $get_time_data;
        
        $year_data = ServiceMlServiceFdis::where('year',$year)->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->where('status','!=','IP')->where('type','H')->where('parent_delete_id','0')->get();

        if (count($year_data)>0) {
            // return $year_data;
           $data['data'] = ServiceMlServiceFdis::where('year',$year)->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->where('status','!=','IP')->where('status','!=','D')->where('type','H')->where('parent_delete_id','0')->get();
        }else{
            
            $previous_year = ServiceMlServiceFdis::where('user_id',auth()->user()->id)->where('year','<',$year)->where('profile_id',auth()->user()->current_profile)->latest('year')->first();

            
            
            if ($previous_year!="") {
            
            $previous_year1 = ServiceMlServiceFdis::where('status','!=','D')->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('year',$previous_year->year)->where('profile_id',auth()->user()->current_profile)->where('type','Y')->pluck('id')->toArray();

            



            

            // $previous_year_delete_data_yearly = ServiceMlServiceFdis::where('status','D')->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('year',$previous_year->year)->where('profile_id',auth()->user()->current_profile)->pluck('parent_delete_id')->toArray();



            // $previous_year = array_diff($previous_year1,$previous_year_delete_data_yearly);

            // return $previous_year;

            // return $previous_year;
            $new_year_in_progress = ServiceMlServiceFdis::where('status','IP')->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('year',$year)->where('profile_id',auth()->user()->current_profile)->pluck('id')->toArray();
            // return $new_year_in_progress;
            
            $parent_delete_id =  ServiceMlServiceFdis::where('status','D')->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('year',$year)->where('parent_delete_id','!=','0')->where('profile_id',auth()->user()->current_profile)->pluck('parent_delete_id')->toArray();
           

             $array_merge = array_merge($previous_year1,$new_year_in_progress);


             $final_ids = array_diff($array_merge, $parent_delete_id);
             $data['data'] = ServiceMlServiceFdis::whereIn('id',$final_ids)->get();

                
            }else{
                $data['data'] = ServiceMlServiceFdis::where('id',0)->get();
            }
        }

        return view('ml_service_fdi.production.index',$data);
    }

    public function save_next(Request $request)
    {
        if (@$request->addmore) {
            foreach(@$request->addmore as $value)
            {
                // return $value['product'];
                $production = new ServiceMlServiceFdis;
                $production->year = $request->year;
                $production->product = $value['product'];
                $production->unit = $value['unit'];
                $production->quantity = $value['quantity'];
                $production->price = $value['price'];
                $production->capacity = $value['capacity'];
                $production->user_id = auth()->user()->id;
                $production->profile_id = auth()->user()->current_profile;
                $production->status = 'AA';
                $production->save();

                $domestic = new SalesMlServiceFdis;
                $domestic->profile_id = auth()->user()->current_profile;
                $domestic->user_id = auth()->user()->id;
                $domestic->product_id = $production->id;
                $domestic->status = 'IP';
                $domestic->year = $request->year;
                $domestic->save();

                
            }
        }
        if (@$request->type_submission=="S") {
            return redirect()->back()->with('success','Data Saved Successfully');
        }else{
            return redirect()->route('manage.sales.export.ml-domestic-service');
        }
    }

    public function add()
    {
        $data = [];
        $data['get_time_data'] = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','H')->first();
        return view('ml_service_fdi.production.add',$data);
    }

    public function insert(Request $request)
    {

        $get_time_data = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','H')->first();

        $check = ServiceMlServiceFdis::where('year',$get_time_data->year)->where('user_id',auth()->user()->id)->whereIn('status',['AA','S','D'])->where('parent_delete_id','0')->where('type','H')->where('profile_id',auth()->user()->current_profile)->first();    

        $previous_year = ServiceMlServiceFdis::whereIn('status',['AA','S'])->where('user_id',auth()->user()->id)->orderBy('id','desc')->where('year','<',$get_time_data->year)->where('type','Y')->where('profile_id',auth()->user()->current_profile)->latest('year')->first();


         





        $production = new ServiceMlServiceFdis;
        $production->year = $request->year;
        $production->from_month = $request->from_month;
        $production->profile_id = auth()->user()->current_profile;
        $production->end_month = $request->end_month;
        $production->product = $request->product;
        $production->unit = $request->unit;
        $production->quantity = $request->quantity;
        if($check!=""){
            $production->status="AA";
         }
         elseif ($previous_year!="") {

            $production->status="IP";
         }else{
            $production->status="AA";
         }

        $production->price = $request->price;
        $production->capacity = $request->capacity;
        $production->user_id = auth()->user()->id;
        
        $production->save();

                if ($production->status!="IP") {
                $domestic = new SalesMlServiceFdis;
                $domestic->profile_id = auth()->user()->current_profile;
                $domestic->user_id = auth()->user()->id;
                $domestic->product_id = $production->id;
                $domestic->status = 'IP';
                $domestic->year = $request->year;
                $domestic->save();

                
            }
        return redirect()->back()->with('success','Data Saved Successfully');
    }

    public function deleteView($id)
    {
        $data = [];
        $data['data'] = ServiceMlServiceFdis::where('id',$id)->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        if($data['data']!="")
        {
            return view('ml_service_fdi.production.delete',$data);
        }else{
            return redirect()->back()->with('error','Something Went Wrong');
        }
    }

    public function deleteSubmit(Request $request)
    {
        $details = ServiceMlServiceFdis::where('id',$request->id)->first();
        $get_time_data = Time::whereDate('from_date', '<=', date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))->where('type','H')->first();

        if ($details->year==$get_time_data->year && $details->year!="IP") {
        


        ServiceMlServiceFdis::where('id',$request->id)->update([
            'status'=>'D',
            'reason'=>$request->reason,
            'delete_date'=>date('Y-m-d')
        ]);

        SalesMlServiceFdis::where('product_id',$request->id)->update(['status'=>'D']);
        


       }else{
            
            $insert = new ServiceMlServiceFdis;
            $insert->status='D';
            $insert->parent_delete_id=$details->id;
            $insert->year=$get_time_data->year;
            $insert->user_id=auth()->user()->id;
            $insert->profile_id=auth()->user()->current_profile;
            $insert->reason=$request->reason;
            $insert->delete_date=date('Y-m-d');
            $insert->save();
       }
        return redirect()->route('manage.service.manufacture.ml-services-fdi')->with('success','Data Deleted Successfully');
    }

    public function edit($id)
    {
        $data = [];
        $data['data'] = ServiceMlServiceFdis::where('id',$id)->where('type','H')->where('user_id',auth()->user()->id)->where('status','!=','D')->first();
        if($data['data']!="")
        {
            return view('ml_service_fdi.production.edit',$data);
        }else{
            return redirect()->back()->with('error','Something Went Wrong');
        }
    }

    public function update(Request $request)
    {
        $production = [];
        $production['year'] = $request->year;
        $production['from_month'] = $request->from_month;
        $production['end_month'] = $request->end_month;
        $production['product'] = $request->product;
        $production['unit'] = $request->unit;
        $production['quantity'] = $request->quantity;


        $production['price'] = $request->price;
        $production['capacity'] = $request->capacity;
        $production['user_id'] = auth()->user()->id;
        ServiceMlServiceFdis::where('id',$request->id)->update($production);
        return redirect()->back()->with('success','Data Updated Successfully');
    }
}
