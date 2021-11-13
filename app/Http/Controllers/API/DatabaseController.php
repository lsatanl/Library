<?php

namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Models\Library;
class DatabaseController extends Controller
{
    public function databseview(){
     $lib = Library::withTrashed()->paginate(25);
        return view('database',compact('lib'));
    }
    public function databsemodify($id){
        $find_book =Library::find($id);
        return view('modify.database',compact('find_book'));
    }
    // function-name1 => redirects back and function-name2 => returns database page
        public function namechange1(Request $request,$id){
        if(!is_null($request -> name)){
            Library::find($id)->Update([
                'Name' => $request -> name,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Name' => 'Unknown',
            ]);
        }
        return redirect()->back()->with('changed','Change made successfully');
    }
        public function namechange2(Request $request,$id){
        if(!is_null($request -> name)){
            Library::find($id)->Update([
                'Name' => $request -> name,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Name' => 'Unknown',
            ]);
        }
        return redirect('database')->with('changed','Change made successfully');
    }
    // function-name1 => redirects back and function-name2 => returns database page
        public function typechange1(Request $request,$id){
        if(!is_null($request -> Type_of_name)){
            Library::find($id)->Update([
                'Type_of_name' => $request -> Type_of_name,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Type_of_name' => 'Unknown',
            ]);
        }
        return redirect()->back()->with('changed','Change made successfully');
    }
        public function typechange2(Request $request,$id){
        if(!is_null($request -> Type_of_name)){
            Library::find($id)->Update([
                'Type_of_name' => $request -> Type_of_name,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Type_of_name' => 'Unknown',
            ]);
        }
        return redirect('database')->with('changed','Change made successfully');
    }
    // function-name1 => redirects back and function-name2 => returns database page
        public function rolechange1(Request $request,$id){
        if(!is_null($request -> Role)){
            Library::find($id)->Update([
                'Role' => $request -> Role,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Role' => 'Unknown',
            ]);
        }
        return redirect()->back()->with('changed','Change made successfully');
    }
        public function rolechange2(Request $request,$id){
        if(!is_null($request -> Role)){
            Library::find($id)->Update([
                'Role' => $request -> Role,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Role' => 'Unknown',
            ]);
        }
        return redirect('database')->with('changed','Change made successfully');
    }
    // function-name1 => redirects back and function-name2 => returns database page
        public function titlechange1(Request $request,$id){
        if(!is_null($request -> Title)){
            Library::find($id)->Update([
                'Title' => $request -> Title,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Title' => 'Unknown',
            ]);
        }
        return redirect()->back()->with('changed','Change made successfully');
    }
        public function titlechange2(Request $request,$id){
        if(!is_null($request -> Title)){
            Library::find($id)->Update([
                'Title' => $request -> Title,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Title' => 'Unknown',
            ]);
        }
        return redirect('database')->with('changed','Change made successfully');
    }
    // function-name1 => redirects back and function-name2 => returns database page
        public function yearchange1(Request $request,$id){
        if(!is_null($request -> Date_of_creation_or_publication)){
            Library::find($id)->Update([
                'Date_of_creation_or_publication' => $request -> Date_of_creation_or_publication,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Date_of_creation_or_publication' => 'Unknown',
            ]);
        }
        return redirect()->back()->with('changed','Change made successfully');
    }
        public function yearchange2(Request $request,$id){
        if(!is_null($request -> Date_of_creation_or_publication)){
            Library::find($id)->Update([
                'Date_of_creation_or_publication' => $request -> Date_of_creation_or_publication,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Date_of_creation_or_publication' => 'Unknown',
            ]);
        }
        return redirect('database')->with('changed','Change made successfully');
    }
    // function-name1 => redirects back and function-name2 => returns database page
        public function datechange1(Request $request,$id){
        if(!is_null($request -> Dates_associated_with_name)){
            Library::find($id)->Update([
                'Dates_associated_with_name' => $request -> Dates_associated_with_name,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Dates_associated_with_name' => 'Unknown',
            ]);
        }
        return redirect()->back()->with('changed','Change made successfully');
    }
        public function datechange2(Request $request,$id){
        if(!is_null($request -> Dates_associated_with_name)){
            Library::find($id)->Update([
                'Dates_associated_with_name' => $request -> Dates_associated_with_name,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Dates_associated_with_name' => 'Unknown',
            ]);
        }
        return redirect('database')->with('changed','Change made successfully');
    }
    // function-name1 => redirects back and function-name2 => returns database page
        public function typerchange1(Request $request,$id){
        if(!is_null($request -> Type_of_resource)){
            Library::find($id)->Update([
                'Type_of_resource' => $request -> Type_of_resource,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Type_of_resource' => 'Unknown',
            ]);
        }
        return redirect()->back()->with('changed','Change made successfully');
    }
        public function typerchange2(Request $request,$id){
        if(!is_null($request -> Type_of_resource)){
            Library::find($id)->Update([
                'Type_of_resource' => $request -> Type_of_resource,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Type_of_resource' => 'Unknown',
            ]);
        }
        return redirect('database')->with('changed','Change made successfully');
    }
    // function-name1 => redirects back and function-name2 => returns database page
        public function contentchange1(Request $request,$id){
        if(!is_null($request -> Content_typ)){
            Library::find($id)->Update([
                'Content_type' => $request -> Content_type,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Content_type' => 'Unknown',
            ]);
        }
        return redirect()->back()->with('changed','Change made successfully');
    }
        public function contentchange2(Request $request,$id){
        if(!is_null($request -> Content_typ)){
            Library::find($id)->Update([
                'Content_type' => $request -> Content_type,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Content_type' => 'Unknown',
            ]);
        }
        return redirect('database')->with('changed','Change made successfully');
    }
    // function-name1 => redirects back and function-name2 => returns database page
        public function otherchange1(Request $request,$id){
        if(!is_null($request -> Other_names)){
            Library::find($id)->Update([
                'Other_names' => $request -> Other_names,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Other_names' => 'Unknown',
            ]);
        }
        return redirect()->back()->with('changed','Change made successfully');
    }
        public function otherchange2(Request $request,$id){
        if(!is_null($request -> Other_names)){
            Library::find($id)->Update([
                'Other_names' => $request -> Other_names,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Other_names' => 'Unknown',
            ]);
        }
        return redirect('database')->with('changed','Change made successfully');
    }
    // function-name1 => redirects back and function-name2 => returns database page
        public function materialchange1(Request $request,$id){
        if(!is_null($request -> Material_type)){
            Library::find($id)->Update([
                'Material_type' => $request -> Material_type,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Material_type' => 'Unknown',
            ]);
        }
        return redirect()->back()->with('changed','Change made successfully');
    }
        public function materialchange2(Request $request,$id){
        if(!is_null($request -> Material_type)){
            Library::find($id)->Update([
                'Material_type' => $request -> Material_type,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Material_type' => 'Unknown',
            ]);
        }
        return redirect('database')->with('changed','Change made successfully');
    }
    // function-name1 => redirects back and function-name2 => returns database page
        public function bnbchange1(Request $request,$id){
        if(!is_null($request -> BNB_number)){
            Library::find($id)->Update([
                'BNB_number' => $request -> BNB_number,
            ]);
        }
        else{
           Library::find($id)->Update([
                'BNB_number' => 'Unknown',
            ]);
        }
        return redirect()->back()->with('changed','Change made successfully');
    }
        public function bnbchange2(Request $request,$id){
        if(!is_null($request -> BNB_number)){
            Library::find($id)->Update([
                'BNB_number' => $request -> BNB_number,
            ]);
        }
        else{
           Library::find($id)->Update([
                'BNB_number' => 'Unknown',
            ]);
        }
        return redirect('database')->with('changed','Change made successfully');
    }
    // function-name1 => redirects back and function-name2 => returns database page
        public function archivalchange1(Request $request,$id){
        if(!is_null($request -> Archival_Resource_Key)){
            Library::find($id)->Update([
                'Archival_Resource_Key' => $request -> Archival_Resource_Key,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Archival_Resource_Key' => 'Unknown',
            ]);
        }
        return redirect()->back()->with('changed','Change made successfully');
    }
        public function archivalchange2(Request $request,$id){
        if(!is_null($request -> Archival_Resource_Key)){
            Library::find($id)->Update([
                'Archival_Resource_Key' => $request -> Archival_Resource_Key,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Archival_Resource_Key' => 'Unknown',
            ]);
        }
        return redirect('database')->with('changed','Change made successfully');
    }
    // function-name1 => redirects back and function-name2 => returns database page
        public function isbnchange1(Request $request,$id){
        if(!is_null($request -> ISBN)){
            Library::find($id)->Update([
                'ISBN' => $request -> ISBN,
            ]);
        }
        else{
           Library::find($id)->Update([
                'ISBN' => 'Unknown',
            ]);
        }
        return redirect()->back()->with('changed','Change made successfully');
    }
        public function isbnchange2(Request $request,$id){
        if(!is_null($request -> ISBN)){
            Library::find($id)->Update([
                'ISBN' => $request -> ISBN,
            ]);
        }
        else{
           Library::find($id)->Update([
                'ISBN' => 'Unknown',
            ]);
        }
        return redirect('database')->with('changed','Change made successfully');
    }
    // function-name1 => redirects back and function-name2 => returns database page
        public function varientchange1(Request $request,$id){
        if(!is_null($request -> Variant_titles)){
            Library::find($id)->Update([
                'Variant_titles' => $request -> Variant_titles,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Variant_titles' => 'Unknown',
            ]);
        }
        return redirect()->back()->with('changed','Change made successfully');
    }
        public function varientchange2(Request $request,$id){
        if(!is_null($request -> Variant_titles)){
            Library::find($id)->Update([
                'Variant_titles' => $request -> Variant_titles,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Variant_titles' => 'Unknown',
            ]);
        }
        return redirect('database')->with('changed','Change made successfully');
    }
    // function-name1 => redirects back and function-name2 => returns database page
        public function serieschange1(Request $request,$id){
        if(!is_null($request -> Series_title)){
            Library::find($id)->Update([
                'Series_title' => $request -> Series_title,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Series_title' => 'Unknown',
            ]);
        }
        return redirect()->back()->with('changed','Change made successfully');
    }
        public function serieschange2(Request $request,$id){
        if(!is_null($request -> Series_title)){
            Library::find($id)->Update([
                'Series_title' => $request -> Series_title,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Series_title' => 'Unknown',
            ]);
        }
        return redirect('database')->with('changed','Change made successfully');
    }
    // function-name1 => redirects back and function-name2 => returns database page
        public function nserieschange1(Request $request,$id){
        if(!is_null($request -> within_series)){
            Library::find($id)->Update([
                'within_series' => $request -> within_series,
            ]);
        }
        else{
           Library::find($id)->Update([
                'within_series' => 'Unknown',
            ]);
        }
        return redirect()->back()->with('changed','Change made successfully');
    }
        public function nserieschange2(Request $request,$id){
        if(!is_null($request -> within_series)){
            Library::find($id)->Update([
                'within_series' => $request -> within_series,
            ]);
        }
        else{
           Library::find($id)->Update([
                'within_series' => 'Unknown',
            ]);
        }
        return redirect('database')->with('changed','Change made successfully');
    }
    // function-name1 => redirects back and function-name2 => returns database page
        public function countrychange1(Request $request,$id){
        if(!is_null($request -> Country_of_publication)){
            Library::find($id)->Update([
                'Country_of_publication' => $request -> Country_of_publication,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Country_of_publication' => 'Unknown',
            ]);
        }
        return redirect()->back()->with('changed','Change made successfully');
    }
        public function countrychange2(Request $request,$id){
        if(!is_null($request -> Country_of_publication)){
            Library::find($id)->Update([
                'Country_of_publication' => $request -> Country_of_publication,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Country_of_publication' => 'Unknown',
            ]);
        }
        return redirect('database')->with('changed','Change made successfully');
    }
    // function-name1 => redirects back and function-name2 => returns database page
        public function placechange1(Request $request,$id){
        if(!is_null($request -> Place_of_publication)){
            Library::find($id)->Update([
                'Place_of_publication' => $request -> Place_of_publication,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Place_of_publication' => 'Unknown',
            ]);
        }
        return redirect()->back()->with('changed','Change made successfully');
    }
        public function placechange2(Request $request,$id){
        if(!is_null($request -> Place_of_publication)){
            Library::find($id)->Update([
                'Place_of_publication' => $request -> Place_of_publication,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Place_of_publication' => 'Unknown',
            ]);
        }
        return redirect('database')->with('changed','Change made successfully');
    }
    // function-name1 => redirects back and function-name2 => returns database page
        public function publisherchange1(Request $request,$id){
        if(!is_null($request -> Publisher)){
            Library::find($id)->Update([
                'Publisher' => $request -> Publisher,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Publisher' => 'Unknown',
            ]);
        }
        return redirect()->back()->with('changed','Change made successfully');
    }
        public function publisherchange2(Request $request,$id){
        if(!is_null($request -> Publisher)){
            Library::find($id)->Update([
                'Publisher' => $request -> Publisher,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Publisher' => 'Unknown',
            ]);
        }
        return redirect('database')->with('changed','Change made successfully');
    }
    // function-name1 => redirects back and function-name2 => returns database page
        public function editionchange1(Request $request,$id){
        if(!is_null($request -> Edition)){
            Library::find($id)->Update([
                'Edition' => $request -> Edition,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Edition' => 'Unknown',
            ]);
        }
        return redirect()->back()->with('changed','Change made successfully');
    }
        public function editionchange2(Request $request,$id){
        if(!is_null($request -> Edition)){
            Library::find($id)->Update([
                'Edition' => $request -> Edition,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Edition' => 'Unknown',
            ]);
        }
        return redirect('database')->with('changed','Change made successfully');
    }
    // function-name1 => redirects back and function-name2 => returns database page
        public function physicalchange1(Request $request,$id){
        if(!is_null($request -> Physical_description)){
            Library::find($id)->Update([
                'Physical_description' => $request -> Physical_description,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Physical_description' => 'Unknown',
            ]);
        }
        return redirect()->back()->with('changed','Change made successfully');
    }
        public function physicalchange2(Request $request,$id){
        if(!is_null($request -> Physical_description)){
            Library::find($id)->Update([
                'Physical_description' => $request -> Physical_description,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Physical_description' => 'Unknown',
            ]);
        }
        return redirect('database')->with('changed','Change made successfully');
    }
    // function-name1 => redirects back and function-name2 => returns database page
        public function deweychange1(Request $request,$id){
        if(!is_null($request -> Dewey_classification)){
            Library::find($id)->Update([
                'Dewey_classification' => $request -> Dewey_classification,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Dewey_classification' => 'Unknown',
            ]);
        }
        return redirect()->back()->with('changed','Change made successfully');
    }
        public function deweychange2(Request $request,$id){
        if(!is_null($request -> Dewey_classification)){
            Library::find($id)->Update([
                'Dewey_classification' => $request -> Dewey_classification,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Dewey_classification' => 'Unknown',
            ]);
        }
        return redirect('database')->with('changed','Change made successfully');
    }
    // function-name1 => redirects back and function-name2 => returns database page
        public function blchange1(Request $request,$id){
        if(!is_null($request -> BL_shelfmark)){
            Library::find($id)->Update([
                'BL_shelfmark' => $request -> BL_shelfmark,
            ]);
        }
        else{
           Library::find($id)->Update([
                'BL_shelfmark' => 'Unknown',
            ]);
        }
        return redirect()->back()->with('changed','Change made successfully');
    }
        public function blchange2(Request $request,$id){
        if(!is_null($request -> BL_shelfmark)){
            Library::find($id)->Update([
                'BL_shelfmark' => $request -> BL_shelfmark,
            ]);
        }
        else{
           Library::find($id)->Update([
                'BL_shelfmark' => 'Unknown',
            ]);
        }
        return redirect('database')->with('changed','Change made successfully');
    }
    // function-name1 => redirects back and function-name2 => returns database page
        public function genrechange1(Request $request,$id){
        if(!is_null($request -> Genre)){
            Library::find($id)->Update([
                'Genre' => $request -> Genre,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Genre' => 'Unknown',
            ]);
        }
        return redirect()->back()->with('changed','Change made successfully');
    }
        public function genrechange2(Request $request,$id){
        if(!is_null($request -> Genre)){
            Library::find($id)->Update([
                'Genre' => $request -> Genre,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Genre' => 'Unknown',
            ]);
        }
        return redirect('database')->with('changed','Change made successfully');
    }
    // function-name1 => redirects back and function-name2 => returns database page
        public function languageschange1(Request $request,$id){
        if(!is_null($request -> Languages)){
            Library::find($id)->Update([
                'Languages' => $request -> Languages,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Languages' => 'Unknown',
            ]);
        }
        return redirect()->back()->with('changed','Change made successfully');
    }
        public function languageschange2(Request $request,$id){
        if(!is_null($request -> Languages)){
            Library::find($id)->Update([
                'Languages' => $request -> Languages,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Languages' => 'Unknown',
            ]);
        }
        return redirect('database')->with('changed','Change made successfully');
    }
    // function-name1 => redirects back and function-name2 => returns database page
        public function noteschange1(Request $request,$id){
        if(!is_null($request -> Notes)){
            Library::find($id)->Update([
                'Notes' => $request -> Notes,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Notes' => 'Unknown',
            ]);
        }
        return redirect()->back()->with('changed','Change made successfully');
    }
        public function noteschange2(Request $request,$id){
        if(!is_null($request -> Notes)){
            Library::find($id)->Update([
                'Notes' => $request -> Notes,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Notes' => 'Unknown',
            ]);
        }
        return redirect('database')->with('changed','Change made successfully');
    }
    // function-name1 => redirects back and function-name2 => returns database page
        public function provchange1(Request $request,$id){
        if(!is_null($request -> Provenance)){
            Library::find($id)->Update([
                'Provenance' => $request -> Provenance,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Provenance' => 'Unknown',
            ]);
        }
        return redirect()->back()->with('changed','Change made successfully');
    }
        public function provechange2(Request $request,$id){
        if(!is_null($request -> Provenance)){
            Library::find($id)->Update([
                'Provenance' => $request -> Provenance,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Provenance' => 'Unknown',
            ]);
        }
        return redirect('database')->with('changed','Change made successfully');
    }
    // function-name1 => redirects back and function-name2 => returns database page
        public function topicschange1(Request $request,$id){
        if(!is_null($request -> Topics)){
            Library::find($id)->Update([
                'Topics' => $request -> Topics,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Topics' => 'Unknown',
            ]);
        }
        return redirect()->back()->with('changed','Change made successfully');
    }
        public function topicschange2(Request $request,$id){
        if(!is_null($request -> Topics)){
            Library::find($id)->Update([
                'Topics' => $request -> Topics,
            ]);
        }
        else{
           Library::find($id)->Update([
                'Topics' => 'Unknown',
            ]);
        }
        return redirect('database')->with('changed','Change made successfully');
    }

}
