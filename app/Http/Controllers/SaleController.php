<?php

namespace App\Http\Controllers;
use App\Models\sale;
use Illuminate\Http\Request;
use App\Models\account;
use Illuminate\Support\Facades\DB;
use Session;
class SaleController extends Controller
{
    function listsale()
    {
        $data = DB::table('sales')
            ->join('accounts', 'sales.AccountID','=', 'accounts.AccountID')
            ->select('sales.*','accounts.AccountName')
            ->get();
        return view('listsale',["data"=>$data]);
    }

    function addnewsale()
    {
        $data= account::all();
        return view('addsale',['data'=>$data]);
    }

    function addsale(Request $req)
    {
        $cust = new sale();
        $cust->AccountID=$req->input('AccountID');
        $cust->InvoiceNumber=$req->input('InvoiceNumber');
        $cust->AmountInvoice=$req->input('AmountInvoice');
        $cust->remarks=$req->input('remarks');
        $cust->save();
        $req->session()->flash('status', 'Sales Successfully');
        return redirect('listsale');
    }
    function deletesale($SaleID)
    {
        sale::find($SaleID)->delete();
        Session::flash('status', 'Sale Delete Successfully');
        return redirect('listsale');
    }

    function editsale($SaleID)
    {
        $data= sale::find($SaleID);
        $catdata = account::all();

        return view('editsale',['data'=>$data, 'catdata'=>$catdata]);
    }

    function updatesale(Request $req)
    {
        $cust = sale::find($req->input('SaleID'));
        $cust->AccountID=$req->input('AccountID');
        $cust->InvoiceNumber=$req->input('InvoiceNumber');
        $cust->AmountInvoice=$req->input('AmountInvoice');
        $cust->remarks=$req->input('remarks');
        $cust->save();
        $req->session()->flash('status', 'Sale Updated Successfully');
        return redirect('listsale');
    }
}
