<?php

namespace App\Http\Controllers;
use App\Models\myorderitem;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
class MyOrderItemController extends Controller
{
    function listmyorderitem()
    {
        $data = DB::table('myorderitems')
            ->join('products', 'myorderitems.ProductID','=', 'products.ProductID')
            ->join('myorders', 'myorderitems.MyOrderID','=', 'myorders.MyOrderID')
            ->select('myorderitems.*','myorders.MyOrderID','products.ProductName')
            ->get();
        return view('listmyorderitem',["data"=>$data]);
    }
    function addnewmyorderitem()
    {
        $data= product::all();

        return view('addmyorderitem',['data'=>$data]);
    }
    function addmyorderitem(Request $req)
    {
        $cust = new myorderitem();
        $cust->MyOrderID=$req->input('MyOrderID');
        $cust->ProductID=$req->input('ProductID');
        $cust->OrderedQuantity=$req->input('OrderedQuantity');
        $cust->save();
        $req->session()->flash('status', 'My Order Item Added Successfully');
        return redirect('listmyorderitem');
    }
    function deletemyorderitem($OrderItemId)
    {
        myorderitem::find($OrderItemId)->delete();
        Session::flash('status', 'My Order Item Delete Successfully');
        return redirect('listmyorderitem');
    }

    function editmyorderitem($OrderItemId)
    {
        $data= myorderitem::find($OrderItemId);
        $prodata= product::all();
        return view('editmyorderitem',['data'=>$data, 'prodata'=>$prodata]);
    }

    function updatemyorderitem(Request $req)
    {
        $cust = myorderitem::find($req->input('OrderItemId'));
        $cust->ProductID=$req->input('ProductID');
        $cust->OrderedQuantity=$req->input('OrderedQuantity');
        $cust->save();
        $req->session()->flash('status', 'My Order Item Updated Successfully');
        return redirect('listmyorderitem');
    }
}
