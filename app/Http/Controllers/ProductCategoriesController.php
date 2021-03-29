<?php

namespace App\Http\Controllers;
use App\Models\productcategories;
use Illuminate\Http\Request;
use Session;
class ProductCategoriesController extends Controller
{
    function listproductcategories()
    {
        $data = productcategories::all();
        return view('listproductcategories',["data"=>$data]);
    }
    function addproductcategories(Request $req)
    {
        $cust = new productcategories();
        $cust->ProductCategoryName=$req->input('ProductCategoryName');
        $cust->save();
        $req->session()->flash('status', 'Product Category Added Successfully');
        return redirect('listproductcategories');
    }
    function deleteproductcategories($productCategoryID)
    {
        productcategories::find($productCategoryID)->delete();
        Session::flash('status', 'Product Category Delete Successfully');
        return redirect('listproductcategories');
    }

    function editproductcategories($productCategoryID)
    {
        $data= productcategories::find($productCategoryID);
        return view('editproductcategories',['data'=>$data]);
    }

    function updateproductcategories(Request $req)
    {
        $cust = productcategories::find($req->input('productCategoryID'));
        $cust->productCategoryName=$req->input('productCategoryName');
        $cust->save();
        $req->session()->flash('status', 'product Category Updated Successfully');
        return redirect('listproductcategories');
    }
}
