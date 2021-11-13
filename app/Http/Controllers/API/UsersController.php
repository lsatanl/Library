<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function usersview(){
        try {
        $usersdata = Auth::user()->all();
        $trash = User::onlyTrashed()->latest()->paginate();
        }catch (\Throwable $exception){
            return view('error.404');
        }
        return view('modify.users',compact('usersdata','trash'));
    }
    public function usersuspend($id){
        try {
        User::find($id)->delete($id);
        }catch (\Throwable $exception){
            return view('error.404');
        }
      return redirect()->back()->with('suspend','Successfuly suspended');
    }
    public function userdelete($id){
        try {
      User::find($id)->forceDelete($id);
        }catch (\Throwable $exception){
            return view('error.404');
        }
        return redirect()->back()->with('delete', 'Successfuly deleted');
    }
    public function userretrieve($id){
        try {
        User::withTrashed()->find($id)->restore();
        }catch (\Throwable $exception){
            return view('error.404');
        }
        return redirect()->back()->with('retrieve', 'Successfuly retreieved');
    }
    public function accessdenied(){
        return view('error.denied');
    }
}
