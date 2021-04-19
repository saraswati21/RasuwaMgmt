<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Models\saleitem;
use App\Models\sale;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
class SaleItemController extends Controller
{
    function listsaleitem()
    {
        $data = DB::table('saleitems')
                ->join('sales', 'saleitems.SaleID','=', 'sales.SaleID')
                ->join('products', 'saleitems.ProductID','=', 'products.ProductID')
                ->select('saleitems.*','products.ProductName','sales.SaleID')
                ->get();
        return view('listsaleitem',["data"=>$data]);
    }

    function addnewsaleitem()
    {
        $data= product::all();
        return view('addsaleitem',['data'=>$data]);
    }

    function addsaleitem(Request $req)
    {
        $cust = new saleitem();
        $cust->SaleID=$req->input('SaleID');
        $cust->ProductID=$req->input('ProductID');
        $cust->SaleQuantity=$req->input('SaleQuantity');
        $cust->SaleUnitPrice=$req->input('SaleUnitPrice');
        $cust->save();
        $req->session()->flash('status', 'Sale Item Successfully');
        return redirect('listsaleitem');
    }
    function deletesaleitem($SaleItemId)
    {
        sale::find($SaleItemId)->delete();
        Session::flash('status', 'Sale Item Delete Successfully');
        return redirect('listsaleitem');
    }

    function editsaleitem($SaleItemId)
    {
        $data= saleitem::find($SaleItemId);
        $prodata = product::all();
        return view('editsaleitem',['data'=>$data, 'prodata'=>$prodata]);
    }

    function updatesaleitem(Request $req)
    {
        $cust = saleitem::find($req->input('SaleItemId'));
        $cust->SaleID=$req->input('SaleID');
        $cust->ProductID=$req->input('ProductID');
        $cust->SaleQuantity=$req->input('SaleQuantity');
        $cust->SaleUnitPrice=$req->input('SaleUnitPrice');
        $cust->save();
        $req->session()->flash('status', 'Sale Item Updated Successfully');
        return redirect('listsaleitem');
    }
}
