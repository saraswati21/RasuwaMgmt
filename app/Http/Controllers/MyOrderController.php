<?php

namespace App\Http\Controllers;
use App\Models\myorder;
use App\Models\account;
use App\Models\orderstatus;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;

class MyOrderController extends Controller
{
    function listmyorder()
    {
        $data = DB::table('myorders')
            ->join('accounts', 'myorders.AccountID','=', 'accounts.AccountID')
            ->join('orderstatuses', 'myorders.OrderStatusID','=', 'orderstatuses.OrderStatusID')
            ->select('myorders.*','orderstatuses.OrderStatusName','accounts.AccountName')
            ->get();
        return view('listmyorder',["data"=>$data]);
    }

    function addnewmyorder()
    {
        $data= account::all();

        return view('addmyorder',['data'=>$data]);
    }

    function addmyorder(Request $req)
    {
        $cust = new myorder();
        $cust->AccountID=$req->input('AccountID');
        $cust->OrderStatusID='1';
        $cust->OrderNumber=$req->input('OrderNumber');
        $cust->save();
        $req->session()->flash('status', 'My Order Successfully');
        return redirect('listmyorder');
    }
    function deletemyorder($CustomerOrderID)
    {
        myorder::find($CustomerOrderID)->delete();
        Session::flash('status', 'My Order Delete Successfully');
        return redirect('listmyorder');
    }

    function editmyorder($CustomerOrderID)
    {
        $data= myorder::find($CustomerOrderID);
        $prodata = account::all();
        $status = orderstatus::all();
        return view('editmyorder',['data'=>$data, 'prodata'=>$prodata, 'status'=>$status]);
    }

    function updatemyorder(Request $req)
    {
        $cust = myorder::find($req->input('MyOrderID'));
        $cust->AccountID=$req->input('AccountID');
        $cust->save();
        $req->session()->flash('status', 'My Order Updated Successfully');
        return redirect('listmyorder');
    }
}
