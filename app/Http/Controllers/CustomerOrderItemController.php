<?php

namespace App\Http\Controllers;
use App\Models\customerorderitem;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
class CustomerOrderItemController extends Controller
{
    function listcustomerorderitem()
    {
        $data = DB::table('customerorderitems')
            ->join('products', 'customerorderitems.ProductID','=', 'products.ProductID')
            ->select('customerorderitems.*','products.ProductName')
            ->get();
        return view('listcustomerorderitem',["data"=>$data]);
    }
    function addnewcustomerorderitem()
    {
        $data= product::all();
        return view('addcustomerorderitem',['data'=>$data]);
    }
    function addcustomerorderitem(Request $req)
    {
        $cust = new customerorderitem();
        $cust->CustomerOrderID=$req->input('CustomerOrderID');
        $cust->ProductID=$req->input('ProductID');
        $cust->OrderedQuantity=$req->input('OrderedQuantity');
        $cust->save();
        $req->session()->flash('status', 'Customer Order Item Added Successfully');
        return redirect('listcustomerorderitem');
    }
    function deletecustomerorderitem($OrderItemId)
    {
        customerorderitem::find($OrderItemId)->delete();
        Session::flash('status', 'Customer Order Item Delete Successfully');
        return redirect('listcustomerorderitem');
    }

    function editcustomerorderitem($OrderItemId)
    {
        $data= customerorderitem::find($OrderItemId);
        $prodata= product::all();
        return view('editcustomerorderitem',['data'=>$data, 'prodata'=>$prodata]);
    }

    function updatecustomerorderitem(Request $req)
    {
        $cust = customerorderitem::find($req->input('OrderItemId'));
        $cust->ProductID=$req->input('ProductID');
        $cust->OrderedQuantity=$req->input('OrderedQuantity');
        $cust->save();
        $req->session()->flash('status', 'Customer Order Item Updated Successfully');
        return redirect('listcustomerorderitem');
    }
}
