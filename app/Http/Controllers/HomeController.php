<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Carbon\Carbon;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function pricingpage()
    {
        return view('pricingpage');
    }

    public function finalstore(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'vehicle' => 'required',
            'fleetsize' => 'required',
            'lookingfor' => 'required',
            'vehicletracking' => 'required',
            'mobilenumber' => 'required',
            'email' => 'required',
        ]);

        if ($validator->fails()) {
            return false;
        }

        $cnt = count($request->lookingfor);
        // dd($cnt);

        if ($cnt <= 1) {
            return false;
        }

        $dt = Carbon::today();
        $dat = date('d-m-Y', strtotime($dt));

        $data = Data::create([
            'vehicles' => implode(',', $request->vehicle),
            'fleetsize' => $request->fleetsize,
            'lookingfor' => implode(',', $request->lookingfor),
            'vehicletracking' => implode(',', $request->vehicletracking),
            'mobilenumber' => $request->mobilenumber,
            'date' => $dat,
            'email' => $request->email,
        ]);

        $details = [
            'title' => 'Received Inquiry',
            'email' => $data->email,
            'mobilenumber' => $data->mobilenumber,
            'vehicles' => $data->vehicles,
            'fleetsize' => $data->fleetsize,
            'lookingfor' => $data->lookingfor,
            'vehicletracking' => $data->vehicletracking,
        ];
       
        Mail::to('savan.cubezy@gmail.com')->send(new \App\Mail\MyTestMail($details));

        return true;
    }


    public function formviewdata(Request $request)
    {

        // dd($request->all());
        if ($request->ajax()) {
            $serarchdata = $request->get('serarchdata');
            if ($serarchdata == null) {
                $serdate = Carbon::today();
                $dat = date('d-m-Y', strtotime($serdate));
                $product = Data::where('date', $dat)->paginate('12');
            } else {
                $serdate = $request->serarchdata;
                $setserdate = date('d-m-Y', strtotime($serdate));

                $product = Data::where('date', $setserdate)->paginate('12');
            }
            
            $data = view('data', compact('product','serdate'))->render();
            $response['data'] = $data;
            return $response;
        }


        return view('formpage');
    }
}
