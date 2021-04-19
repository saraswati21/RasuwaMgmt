<?php

namespace App\Http\Controllers;

use App\Models\accounttype;
use Illuminate\Http\Request;
use App\Models\account;
use Session;
use Illuminate\Support\Facades\DB;
class accountController extends Controller
{
    function listaccount(){
        $data = DB::table('accounts')
            ->join('accounttypes', 'accounts.AccountTypeID','=', 'accounttypes.AccountTypeID')
            ->select('accounts.*','accounttypes.AccountTypeName')
            ->get();

        return view('listaccount',['data'=>$data]);
    }

    function addnewaccount()
    {
        $data= accounttype::all();
        return view('addaccount',['data'=>$data]);
    }

    function addaccount(Request $req)
    {
        //return $req->input();
        $cust = new account();
        $cust->AccountName=$req->input('AccountName');
        $cust->Address=$req->input('Address');
        $cust->Telephone=$req->input('Telephone');
        $cust->remarks=$req->input('Remarks');
        $cust->AccountTypeID=$req->input('AccountTypeID');
        $cust->save();
        $req->session()->flash('status', 'Account Added Successfully');
        return redirect('listaccount');

    }

    function deleteaccount($AccountID)
    {
        account::find($AccountID)->delete();
        Session::flash('status', 'Account Delete Successfully');
        return redirect('listaccount');
    }


    function editaccount($AccountID)
    {
        $data= account::find($AccountID);
        $catdata = accounttype::all();
        return view('editaccount',['data'=>$data, 'catdata'=>$catdata]);
    }
    function updateaccount(Request $req)
    {
        //return $req->input();
        $cust = account::find($req->input('AccountID'));
        $cust->accountName=$req->input('AccountName');
        $cust->Address=$req->input('Address');
        $cust->Telephone=$req->input('Telephone');
        $cust->remarks=$req->input('Remarks');
        $cust->AccountTypeID=$req->input('AccountTypeID');
        $cust->save();
        $req->session()->flash('status', 'Account Updated Successfully');
        return redirect('listaccount');

    }
}
