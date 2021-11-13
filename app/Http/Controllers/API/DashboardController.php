<?php

namespace App\Http\Controllers\API;
use App\Models\Library;
use App\Models\Rents;
use Auth;

class DashboardController extends Controller
{
    public function dashboardview(){
        $_SESSION['user']=Auth::user()->name ?? '';
        try {
        $lib = Library::withTrashed()->paginate(25) ;
        $rents = Rents::all();
        }catch (\Throwable $exception){
            return view('error.404');
        }
        return view('dashboard',compact('lib','rents'));
    }
    public function rent($id){
        try {
        Library::find($id)->Update([
            "IsRented" => true,
        ]);
        Rents::create([
            "book_id" => Library::find($id)->BL_record_ID,
            "user_id" => Auth::user()->id,
            "created_at","Updated_at" => now(),
        ]);
        }catch (\Throwable $exception){
            return view('error.404');
        }
        return redirect()->back()->with('reserved','Resreved successfully');
    }
     public function return($id){
         try {
        Library::find(Rents::find($id)->rented->id)->Update([
            "IsRented"=> false
        ]);
        Rents::find($id)->ForceDelete($id);
         }catch (\Throwable $exception){
             return view('error.404');
         }
        return redirect()->back()->with('returned','Returned successfully');
    }
}
