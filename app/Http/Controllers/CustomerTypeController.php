<?php

namespace App\Http\Controllers;
use App\Models\customertype;
use Illuminate\Http\Request;
use Session;
class CustomerTypeController extends Controller
{
    function listcustomertype()
    {
        $data = customertype::all();
        return view('listcustomertype',["data"=>$data]);
    }
    function addcustomertype(Request $req)
    {
        $cust = new customertype();
        $cust->CustomerTypeName=$req->input('CustomerTypeName');
        $cust->save();
        $req->session()->flash('status', 'Customer Type Added Successfully');
        return redirect('listcustomertype');
    }
    function deletecustomertype($CustomerTypeID)
    {
        customertype::find($CustomerTypeID)->delete();
        Session::flash('status', 'Customer type Delete Successfully');
        return redirect('listcustomertype');
    }
    function editcustomertype($CustomerTypeID)
    {
        $data= customertype::find($CustomerTypeID);
        return view('editcustomertype',['data'=>$data]);
    }
    function updatecustomertype(Request $req)
    {
        //return $req->input();
        $cust = customertype::find($req->input('CustomerTypeID'));
        $cust->CustomerTypeName=$req->input('CustomerTypeName');
        $cust->save();
        $req->session()->flash('status', 'Customer type Updated Successfully');
        return redirect('listcustomertype');

    }

}
