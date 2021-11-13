<x-app-layout>
    <!--modify database -->
    <div class="container">
        @if(session('changed'))
            <div class="alert alert-success" role="alert">
                <b>{{session('changed')}}</b>
            </div>
        @endif
            <form >
                <input class="form-control lg:px-8" id="SearchInput" type="text" placeholder="Search by id,name,title,etc" aria-label="Search">
            </form>
        <table class="table table-sm table-hover caption-top">
            <thead>
            <caption><b>Library Database - Davinci section</b> <p class="text text-indigo-600 text-center ">To edit any row click on it's Id.</p></caption>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Type of name</th>
                <th scope="col">Role</th>
                <th scope="col">Title</th>
                <th scope="col">Year</th>
                <th scope="col">Status</th>
                <th scope="col">More details</th>
            </tr>
            </thead>
            <tbody id="Table">
            @foreach($lib as $li)
                 <tr>
                        <th scope="row"><a href="{{url('Modify-database/'.$li->id)}}">{{$li->BL_record_ID}}</a></th>
                        <td>@if(!empty($li->Name))
                        {{$li->Name}}
                        @else
                        {{'Unknown'}}
                        @endif</td>
                        <td>@if(!empty($li->Type_of_name))
                        {{$li->Type_of_name}}
                        @else
                        {{'Unknown'}}
                        @endif</td>
                        <td>@if(!empty($li->Role))
                        {{$li->Role}}
                        @else
                        {{'Unknown'}}
                        @endif</td>
                        <td>@if(!empty($li->Title))
                        {{$li->Title}}
                        @else
                        {{'Unknown'}}
                        @endif</td>
                        <td>@if(!empty($li->Date_of_creation_or_publication))
                        {{$li->Date_of_creation_or_publication}}
                        @else
                        {{'Unknown'}}
                        @endif</td>
                        <td>@if(!empty($li->Date_of_creation_or_publication))
                        {{$li->Date_of_creation_or_publication}}
                        @else
                        {{'Unknown'}}
                        @endif</td>
                        <td>
                        <a type="button"  class="btn btn-info btn-sm" data-toggle="modal" data-target="#more-details{{$li->id}}">more...</a>
                        </td>
                  </tr>
                <!-- Modal for more -->
                <div class="modal fade" id="more-details{{$li->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" >Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                          <b>Dates associated_with name : </b>@if(!empty($li->Dates_associated_with_name)){{$li->Dates_associated_with_name}}@else {{'Unknown'}} @endif<br>
                          <b>Type_of resource : </b>@if(!empty($li->Type_of_resource)){{$li->Type_of_resource}}@else {{'Unknown'}} @endif<br>
                          <b>Content type : </b>@if(!empty($li->Content_type)){{$li->Content_type}}@else {{'Unknown'}} @endif<br>
                          <b>Other names : </b>@if(!empty($li->Other_names)){{$li->Other_names}}@else {{'Unknown'}} @endif<br>
                          <b>Material type : </b>@if(!empty($li->Material_type)){{$li->Material_type}}@else {{'Unknown'}} @endif<br>
                          <b>BNB_number : </b>@if(!empty($li->BNB_number)){{$li->BNB_number}}@else {{'Unknown'}} @endif<br>
                          <b>Archival Resource Key : </b>@if(!empty($li->Archival_Resource_Key)){{$li->Archival_Resource_Key}}@else {{'Unknown'}} @endif<br>
                          <b>ISBN : </b>@if(!empty($li->ISBN)){{$li->ISBN}}@else {{'Unknown'}} @endif<br>
                          <b>Variant titles : </b>@if(!empty($li->Variant_titles)){{$li->Variant_titles}}@else {{'Unknown'}} @endif<br>
                          <b>Series title : </b>@if(!empty($li->Series_title)){{$li->Series_title}}@else {{'Unknown'}} @endif<br>
                          <b>Number within series : </b>@if(!empty($li->Number_within_series)){{$li->Number_within_series}}@else {{'Unknown'}} @endif<br>
                          <b>Country of publication : </b>@if(!empty($li->Country_of_publication)){{$li->Country_of_publication}}@else {{'Unknown'}} @endif<br>
                          <b>Place of publication : </b>@if(!empty($li->Place_of_publication)){{$li->Place_of_publication}}@else {{'Unknown'}} @endif<br>
                          <b>Publisher : </b>@if(!empty($li->Publisher)){{$li->Publisher}}@else {{'Unknown'}} @endif<br>
                          <b>Edition : </b>@if(!empty($li->Edition)){{$li->Edition}}@else {{'Unknown'}} @endif<br>
                          <b>Physical description : </b>@if(!empty($li->Physical_description)){{$li->Physical_description}}@else {{'Unknown'}} @endif<br>
                          <b>Dewey classification : </b>@if(!empty($li->Dewey_classification)){{$li->Dewey_classification}}@else {{'Unknown'}} @endif<br>
                          <b>BL shelfmark : </b>@if(!empty($li->BL_shelfmark)){{$li->BL_shelfmark}}@else {{'Unknown'}} @endif<br>
                          <b>Genre : </b>@if(!empty($li->Genre)){{$li->Genre}}@else {{'Unknown'}} @endif<br>
                          <b>Languages : </b>@if(!empty($li->Languages)){{$li->Languages}}@else {{'Unknown'}} @endif<br>
                          <b>Notes : </b>@if(!empty($li->Notes)){{$li->Notes}}@else {{'Unknown'}} @endif<br>
                          <b>Provenance : </b>@if(!empty($li->Provenance)){{$li->Provenance}}@else {{'Unknown'}} @endif<br>
                          <b>Topics : </b>@if(!empty($li->Topics)){{$li->Topics}}@else {{'Unknown'}} @endif<br>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </tbody>
        </table>
        {{$lib->links()}}
    </div>
</x-app-layout>

