<?php

namespace App\Http\Controllers;
use App\Models\userrole;
use Illuminate\Http\Request;
use Session;
class UserRolesController extends Controller
{
    function listuserrole()
    {
        $data = userrole::all();
        return view('listuserrole',["data"=>$data]);
    }
    function adduserrole(Request $req)
    {
        $cust = new userrole();
        $cust->UserRoleName=$req->input('UserRoleName');
        $cust->save();
        $req->session()->flash('status', 'User Role Added Successfully');
        return redirect('listuserrole');
    }
    function deleteuserrole($UserRoleID)
    {
        userrole::find($UserRoleID)->delete();
        Session::flash('status', 'User Role Delete Successfully');
        return redirect('listuserrole');
    }

    function edituserrole($UserRoleID)
    {
        $data= userrole::find($UserRoleID);
        return view('edituserrole',['data'=>$data]);
    }

    function updateuserrole(Request $req)
    {
        $cust = userrole::find($req->input('UserRoleID'));
        $cust->UserRoleName=$req->input('UserRoleName');
        $cust->save();
        $req->session()->flash('status', 'User Role Updated Successfully');
        return redirect('listuserrole');
    }
}
