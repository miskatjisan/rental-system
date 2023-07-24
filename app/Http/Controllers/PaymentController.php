<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Payment;
use App\AdvisorPost;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
class PaymentController extends Controller
{

    public function PaymentOption($id){
        $data = AdvisorPost::findOrFail($id);
        return view('Tenet.payment', compact('data'));
    }

    public function PaymentStore(Request $request){

        $rules=array(
            'amount'=> 'required',
            'phone'=> 'required',
        );

        $message= array(
            'amount.required'=>"amount is requierd is required",
            'phone.unique'=>"phone id is already in use"
        );

        $validate = Validator::make($request->all(),$rules,$message);

        User::findOrFail(Auth::user()->id)->update(['status' => 1]);

            $tent = AdvisorPost::findOrFail($request->tenet);

            if($request->amount === $tent->rent){
                $data = array();
                $data['user_id'] = Auth::user()->id;
                $data['tenant_id'] = $tent->id;
                $data['number'] = $request->number;
                $data['created_at'] = Carbon::now();
                Payment::insert($data);
                User::findOrFail(Auth::user()->id)->update(['status' => 1]);
                return view('Tenet.payment_confirm');
            }else{

                dd("not ok");


            }

        



    }

}
