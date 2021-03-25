<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use Session;
class customerController extends Controller
{
    function listcustomer(){
        $data = customer::all();
        return view('listcustomer',["data"=>$data]);
    }
    function addcustomer(Request $req)
    {
        //return $req->input();
        $cust = new customer();
        $cust->CustomerName=$req->input('CustomerName');
        $cust->Address=$req->input('Address');
        $cust->Telephone=$req->input('Telephone');
        $cust->remarks=$req->input('Remarks');
        $cust->CustomerTypeID=$req->input('CustomerTypeID');
        $cust->save();
        $req->session()->flash('status', 'Customer Added Successfully');
        return redirect('listcustomer');

    }

    function deletecustomer($CustomerID)
    {
        customer::find($CustomerID)->delete();
        Session::flash('status', 'Customer Delete Successfully');
        return redirect('listcustomer');
    }
    function editcustomer($CustomerID)
    {
        $data= customer::find($CustomerID);
        return view('editcustomer',['data'=>$data]);
    }
    function updatecustomer(Request $req)
    {
        //return $req->input();
        $cust = customer::find($req->input('CustomerID'));
        $cust->CustomerName=$req->input('CustomerName');
        $cust->Address=$req->input('Address');
        $cust->Telephone=$req->input('Telephone');
        $cust->remarks=$req->input('Remarks');
        $cust->CustomerTypeID=$req->input('CustomerTypeID');
        $cust->save();
        $req->session()->flash('status', 'Customer Updated Successfully');
        return redirect('listcustomer');

    }
}
