<?php

namespace App\Http\Controllers;
use App\Models\accounttype;
use Illuminate\Http\Request;
use Session;
class AccountTypeController extends Controller
{
    function listaccounttype()
    {
        $data = accounttype::all();
        return view('listaccounttype',["data"=>$data]);
    }
    function addaccounttype(Request $req)
    {
        $cust = new accounttype();
        $cust->AccountTypeName=$req->input('AccountTypeName');
        $cust->save();
        $req->session()->flash('status', 'account Type Added Successfully');
        return redirect('listaccounttype');
    }
    function deleteaccounttype($AccountTypeID)
    {
        accounttype::find($AccountTypeID)->delete();
        Session::flash('status', 'account type Delete Successfully');
        return redirect('listaccounttype');
    }
    function editaccounttype($AccountTypeID)
    {
        $data= accounttype::find($AccountTypeID);
        return view('editaccounttype',['data'=>$data]);
    }
    function updateaccounttype(Request $req)
    {
        //return $req->input();
        $cust = accounttype::find($req->input('AccountTypeID'));
        $cust->AccountTypeName=$req->input('AccountTypeName');
        $cust->save();
        $req->session()->flash('status', 'account type Updated Successfully');
        return redirect('listaccounttype');

    }

}
