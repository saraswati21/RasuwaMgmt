<?php

namespace App\Http\Controllers;
use App\Models\supplier;
use Illuminate\Http\Request;
use Session;
class SupplierController extends Controller
{
    function listsupplier(){
        $data = supplier::all();
        return view('listsupplier',["data"=>$data]);
    }

    function addsupplier(Request $req)
    {
        $cust = new supplier();
        $cust->SupplierName=$req->input('SupplierName');
        $cust->Address=$req->input('Address');
        $cust->Telephone=$req->input('Telephone');
        $cust->remarks=$req->input('remarks');
        $cust->save();
        $req->session()->flash('status', 'Supplier Added Successfully');
        return redirect('listsupplier');
    }

    function editsupplier($SupplierID)
    {
        $data= supplier::find($SupplierID);
        return view('editsupplier',['data'=>$data]);
    }
    function updatesupplier(Request $req)
    {
        $cust = supplier::find($req->input('SupplierID'));
        $cust->SupplierName=$req->input('SupplierName');
        $cust->Address=$req->input('Address');
        $cust->Telephone=$req->input('Telephone');
        $cust->remarks=$req->input('Remarks');
        $cust->save();
        $req->session()->flash('status', 'Supplier Updated Successfully');
        return redirect('listsupplier');

    }

    function deletesupplier($SupplierID)
    {
        supplier::find($SupplierID)->delete();
        Session::flash('status', 'Supplier Delete Successfully');
        return redirect('listsupplier');
    }

}
