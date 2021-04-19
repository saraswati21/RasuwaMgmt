<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\customerorder;
use App\Models\account;
use App\Models\orderstatus;
use Illuminate\Http\Request;
use Session;
class CustomerOrderController extends Controller
{
    function listcustomerorder()
    {
        $data = DB::table('customerorders')
            ->join('accounts', 'customerorders.AccountID','=', 'accounts.AccountID')
            ->join('orderstatuses', 'customerorders.OrderStatusID','=', 'orderstatuses.OrderStatusID')
            ->select('customerorders.*','orderstatuses.OrderStatusName','accounts.AccountName')
            ->get();
        return view('listcustomerorder',["data"=>$data]);
    }

    function addnewcustomerorder()
    {
        $data= account::all();
        return view('addcustomerorder',['data'=>$data]);
    }

    function addcustomerorder(Request $req)
    {
        $cust = new customerorder();
        $cust->AccountID=$req->input('AccountID');
        $cust->OrderStatusID='1';
        $cust->OrderNumber=$req->input('OrderNumber');
        $cust->save();
        $req->session()->flash('status', 'Customer Order Successfully');
        return redirect('listcustomerorder');
    }
    function deletecustomerorder($CustomerOrderID)
    {
        customerorder::find($CustomerOrderID)->delete();
        Session::flash('status', 'Customer Order Delete Successfully');
        return redirect('listcustomerorder');
    }

    function editcustomerorder($CustomerOrderID)
    {
        $data= customerorder::find($CustomerOrderID);
        $prodata = account::all();
        $status = orderstatus::all();
        return view('editcustomerorder',['data'=>$data, 'prodata'=>$prodata, 'status'=>$status]);
    }

    function updatecustomerorder(Request $req)
    {
        $cust = customerorder::find($req->input('CustomerOrderID'));
        $cust->AccountID=$req->input('AccountID');
        $cust->save();
        $req->session()->flash('status', 'Customer Order Updated Successfully');
        return redirect('listcustomerorder');
    }
}
