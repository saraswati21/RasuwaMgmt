<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\userrole;
use Session;
use Illuminate\Support\Facades\DB;
class usercontroller extends Controller
{
    //
    function login(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password, $user->Password))
        {
            return redirect('/login');
        }
        else{
            $req->session()->put('user', $user);
            return redirect('/');
        }
    }
    function logout()
    {
       session()->remove('user',);
       return redirect('/login');

    }

    function listuser()
    {
        $data = DB::table('users')
            ->join('userroles', 'users.UserRoleID','=', 'userroles.UserRoleID')
            ->select('users.*','userroles.UserRoleName')
            ->get();
        return view('listuser',["data"=>$data]);
    }

    function addnewuser()
    {
        $data= userrole::all();
        return view('adduser',['data'=>$data]);
    }

    function adduser(Request $req)
    {
        $cust = new user();
        $cust->UserName=$req->input('UserName');
        $cust->Email=$req->input('Email');
        $cust->UserRoleID=$req->input('UserRoleID');
        $cust->Password=Hash::make($req->input('Password')) ;
        $cust->save();
        $req->session()->flash('status', 'User Added Successfully');
        return redirect('listuser');
    }
    function deleteuser($UserID)
    {
        user::find($UserID)->delete();
        Session::flash('status', 'User Delete Successfully');
        return redirect('listuser');
    }

    function edituser($UserID)
    {
        $data= user::find($UserID);
        $roledata = userrole::all();
        return view('edituser',['data'=>$data,'roledata'=>$roledata]);
    }

    function updateuser(Request $req)
    {
        $cust = user::find($req->input('UserID'));
        $id =$req->input('UserID');
        if($req->password=="")
        {
            $req->session()->flash('error', 'password cannot be empty');
            return redirect( "/edituser/$id");
        }
        $cust->UserName=$req->input('UserName');
        $cust->Email=$req->input('Email');
        $cust->Password=Hash::make($req->input('Password'));
        $cust->UserRoleID=$req->input('UserRoleID');
        $cust->save();
        $req->session()->flash('status', 'User Updated Successfully');
        return redirect('listuser');
    }
}
