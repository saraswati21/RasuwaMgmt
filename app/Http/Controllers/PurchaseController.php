<?php

namespace App\Http\Controllers;
use App\Models\purchase;
use App\Models\account;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
class PurchaseController extends Controller
{
    function listpurchase()
    {
        $data = DB::table('purchases')
            ->join('accounts', 'purchases.AccountID','=', 'accounts.AccountID')
            ->select('purchases.*','accounts.AccountName')
            ->get();
        return view('listpurchase',["data"=>$data]);
    }

    function addnewpurchase()
    {
        $data= account::all();
        return view('addpurchase',['data'=>$data]);
    }

    function addpurchase(Request $req)
    {
        $cust = new purchase();
        $cust->AccountID=$req->input('AccountID');
        $cust->InvoiceNumber=$req->input('InvoiceNumber');
        $cust->AmountInvoice=$req->input('AmountInvoice');
        $cust->remarks=$req->input('remarks');
        $cust->save();
        $req->session()->flash('status', 'Purchase Successfully');
        return redirect('listpurchase');
    }
    function deletepurchase($purchaseID)
    {
        purchase::find($purchaseID)->delete();
        Session::flash('status', 'Purchase Delete Successfully');
        return redirect('listpurchase');
    }

    function editpurchase($purchaseID)
    {
        $data= purchase::find($purchaseID);
        $prodata = account::all();
        return view('editpurchase',['data'=>$data, 'prodata'=>$prodata]);
    }

    function updatepurchase(Request $req)
    {
        $cust = purchase::find($req->input('purchaseID'));
        $cust->AccountID=$req->input('AccountID');
        $cust->InvoiceNumber=$req->input('InvoiceNumber');
        $cust->AmountInvoice=$req->input('AmountInvoice');
        $cust->remarks=$req->input('remarks');
        $cust->save();
        $req->session()->flash('status', 'Purchase Updated Successfully');
        return redirect('listpurchase');
    }
}
