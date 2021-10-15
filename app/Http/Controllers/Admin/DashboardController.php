<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use function Sodium\compare;

class DashboardController extends Controller
{
    public function registered(){
        $users=User::all();
        return view('admin.RegisteredUsers',compact('users'));
    }

    public function AdminProfile()
    {
        $users=User::all();
        return view('admin.ADPR',compact('users'));
    }


    public function AdminEdit(Request $request, $id)
    {
        $users=User::findOrFail($id);
        return view('admin.AdminEdit',compact('users'));
    }

    public function AdminRegister(Request $request,$id )
    {
        $users= User::find($id);
        $users->id=$request->input('id');
        $users->name=$request->input('name');
        $users->phone=$request->input('phone');
        $users->email=$request->input('email');
        $users->update();

        return redirect('/Admin-Profile')->with('status','Admin data Updated Successfully');

    }

    public function destroy($id)
    {
        $users=User::find($id);
        $users->delete();
        return redirect('/registered-users')->with('status','Data Deleted');

    }

}
