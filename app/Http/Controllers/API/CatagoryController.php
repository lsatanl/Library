<?php

namespace App\Http\Controllers\API;
use App\Models\Library;
use Auth;

class CatagoryController extends Controller
{
    public function beforetwentieth(){
        try{
            $lib = Library::where('category_id','LIKE','%1%')
                ->findOrFail()
                ->paginate(10);
        }catch (\Throwable $exception){
            return view('error.404');
        }

        return view('catagory.before20th',compact('lib'));
    }
    public function twentieth(){
        try{
        $lib = Library::withTrashed()
            ->where('category_id','LIKE','%2%')
            ->paginate(10);
        }catch (\Throwable $exception){
            return view('error.404');
        }
        return view('catagory.20th',compact('lib'));
    }
    public function twentyfirst(){
        try{
        $lib = Library::withTrashed()
            ->where('category_id','LIKE','%3%')
            ->paginate(10);
        }catch (\Throwable $exception){
            return view('error.404');
        }
        return view('catagory.21st',compact('lib'));
    }
    public function england(){
        try{
        $lib = Library::withTrashed()
            ->where('category_id','LIKE','%4%')
            ->paginate(10);
        }catch (\Throwable $exception){
            return view('error.404');
        }
        return view('catagory.england',compact('lib'));
    }
    public function italy(){
        try{
        $lib = Library::withTrashed()
            ->where('category_id','LIKE','%5%')
            ->paginate(10);
        }catch (\Throwable $exception){
            return view('error.404');
        }
        return view('catagory.italy',compact('lib'));
    }
    public function english(){
        try{
        $lib = Library::withTrashed()
            ->where('category_id','LIKE','%6%')
            ->paginate(10);
        }catch (\Throwable $exception){
            return view('error.404');
        }
        return view('catagory.english',compact('lib'));
    }
    public function italian(){
        try{
        $lib = Library::withTrashed()
            ->where('category_id','LIKE','%7%')
            ->paginate(10);
        }catch (\Throwable $exception){
            return view('error.404');
        }
        return view('catagory.italian',compact('lib'));
    }
    public function russian(){
        try{
        $lib = Library::withTrashed()
            ->where('category_id','LIKE','%8%')
            ->paginate(10);
        }catch (\Throwable $exception){
            return view('error.404');
        }
        return view('catagory.russian',compact('lib'));
    }
    public function person(){
        try{
        $lib = Library::withTrashed()
            ->where('category_id','LIKE','%9%')
            ->paginate(10);
        }catch (\Throwable $exception){
            return view('error.404');
        }
        return view('catagory.person',compact('lib'));
    }
    public function organisation(){
        try{
        $lib = Library::withTrashed()
            ->where('category_id','LIKE','%10%')
            ->paginate(10);
        }catch (\Throwable $exception){
            return view('error.404');
        }
        return view('catagory.organisation',compact('lib'));
    }
}
