<?php

namespace App\Http\Controllers;

use App\Models\productcategories;
use Illuminate\Http\Request;
use App\Models\product;
use Session;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    function listproduct()
    {
        $data = DB::table('products')
            ->join('productcategories', 'products.productCategoryID','=', 'productcategories.productCategoryID')
            ->select('products.*','productcategories.productCategoryName')
            ->get();
        return view('listproduct',["data"=>$data]);
    }

    function addnewproduct()
    {
        $data= productcategories::all();
        return view('addproduct',['data'=>$data]);
    }

    function addproduct(Request $req)
    {
        //return $req->input();
        $cust = new product();
        $cust->ProductName=$req->input('ProductName');
        $cust->productCategoryID=$req->input('productCategoryID');
        $cust->Unit = $req->input('Unit');
        $cust->SellingPrice=$req->input('SellingPrice');
        $cust->CostPrice=$req->input('CostPrice');
        $cust->save();
        $req->session()->flash('status', 'Product Added Successfully');
        return redirect('listproduct');

    }

    function deleteproduct($ProductID)
    {
        product::find($ProductID)->delete();
        Session::flash('status', 'Product Delete Successfully');
        return redirect('listproduct');
    }

    function editproduct($ProductID)
    {
        $data= product::find($ProductID);
        $catdata = productcategories::all();
        return view('editproduct',['data'=>$data, 'catdata'=>$catdata]);
    }

    function updateproduct(Request $req)
    {
        $cust = product::find($req->input('ProductID'));
        $cust->ProductName=$req->input('ProductName');
        $cust->productCategoryID=$req->input('productCategoryID');
        $cust->Unit=$req->input('Unit');
        $cust->SellingPrice=$req->input('SellingPrice');
        $cust->CostPrice=$req->input('CostPrice');
        $cust->save();
        $req->session()->flash('status', 'product Updated Successfully');
        return redirect('listproduct');

    }
}
