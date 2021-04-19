<?php

namespace App\Http\Controllers;
use App\Models\purchaseitem;
use Illuminate\Http\Request;
use App\Models\product;

use App\Models\purchase;
Use Session;
use Illuminate\Support\Facades\DB;
class PurchaseItemController extends Controller
{
    function listpurchaseitem()
    {
        $data = DB::table('purchaseitems')
            ->join('purchases', 'purchaseitems.purchaseID','=', 'purchases.purchaseID')
            ->join('products', 'purchaseitems.ProductID','=', 'products.ProductID')
            ->select('purchaseitems.*','purchases.purchaseID', 'products.ProductName')
            ->get();
        return view('listpurchaseitem',["data"=>$data]);
    }

    function addnewpurchaseitem()
    {
        $data= product::all();
        return view('addpurchaseitem',['data'=>$data]);
    }

    function addpurchaseitem(Request $req)
    {
        $cust = new purchaseitem();
        $cust->purchaseID=$req->input('purchaseID');
        $cust->ProductID=$req->input('ProductID');
        $cust->purchaseQuantity=$req->input('purchaseQuantity');
        $cust->purchaseUnitPrice=$req->input('purchaseUnitPrice');
        $cust->save();
        $req->session()->flash('status', 'Purchase Item Successfully');
        return redirect('listpurchaseitem');
    }
    function deletepurchaseitem($purchaseID)
    {
        purchaseitem::find($purchaseID)->delete();
        Session::flash('status', 'Purchase Item Delete Successfully');
        return redirect('listpurchaseitem');
    }

    function editpurchaseitem($purchaseID)
    {
        $data= purchaseitem::find($purchaseID);
        $prodata = product::all();
        return view('editpurchaseitem',['data'=>$data, 'prodata'=>$prodata]);
    }

    function updatepurchaseitem(Request $req)
    {
        $cust = purchaseitem::find($req->input('purchaseItemId'));
        $cust->purchaseID=$req->input('purchaseID');
        $cust->ProductID=$req->input('ProductID');
        $cust->purchaseQuantity=$req->input('purchaseQuantity');
        $cust->purchaseUnitPrice=$req->input('purchaseUnitPrice');
        $cust->save();
        $req->session()->flash('status', 'Purchase Item Updated Successfully');
        return redirect('listpurchaseitem');
    }
}
