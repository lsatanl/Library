<script>
    window.onload = function() {
        if(!window.location.hash) {
            window.location = window.location + '#loaded';
            window.location.reload();
        }
    }
</script>
<x-app-layout>
    <x-slot name="header">
        @if($_SESSION['user']!=='Admin')
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <p class="text-2xl">Library Database - Davinci section</p>
                Welcome,<b>{{Auth::user()->name}}</b>.<br>
                <button  class="btn origin-top-right btn-info btn-sm " data-toggle="modal" data-target="#rented"> view your Rented books</button>
            </h2>
            <!-- Modal for more -->
            <div class="modal fade" id="rented" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" >Your Rented books</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            @foreach($rents as $rent)
                                    <b> You rented</b> {{$rent->rented->Title}} <b>by </b> {{$rent->rented->Name}} <b>in </b> {{\Carbon\Carbon::parse($rent->created_at)->diffForHumans() }} <br>
                                    <form method="POST" action="{{url('return/'.$rent->id)}}">
                                        @csrf
                                        <button type="submit"  class="btn btn-success btn-sm">Return</button>
                                    </form><hr class="dashed">
                            @endforeach
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    @if($_SESSION['user']!=='Admin')
                        <div  class="container">
                            @if(session('reserved'))
                                <div class="alert alert-success" role="alert">
                                    <b>{{session('reserved')}}</b>
                                </div>
                            @endif
                            @if(session('returned'))
                                <div class="alert alert-success" role="alert">
                                    <b>{{session('returned')}}</b>
                                </div>
                            @endif
                                @if(session('lib'))
                                   @php session()->has('lib'); @endphp
                            @endif
                            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                                <strong>Catagories</strong>
                                <nav class="navbar navbar-expand-lg navbar-light bg-indigo-50">
                                    <div class="container-fluid">
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Publisher
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li  class="dropdown-item">    <x-jet-nav-link href="{{ route('personcat') }}" :active="request()->routeIs('personcat')">
                                                                {{ __('Person') }}</x-jet-nav-link></li>
                                                        <li  class="dropdown-item">    <x-jet-nav-link href="{{ route('organisationcat') }}" :active="request()->routeIs('organisationcat')">
                                                                {{ __('Organisation') }}</x-jet-nav-link></li>

                                                    </ul>
                                                </li>
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Year
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li  class="dropdown-item">    <x-jet-nav-link href="{{ route('21stcat') }}" :active="request()->routeIs('21stcat')">
                                                                {{ __('21st century') }}</x-jet-nav-link></li>
                                                        <li  class="dropdown-item">    <x-jet-nav-link href="{{ route('20thcat') }}" :active="request()->routeIs('20thcat')">
                                                                {{ __('20th century') }}</x-jet-nav-link></li>
                                                        <li  class="dropdown-item">    <x-jet-nav-link href="{{ route('before20thcat') }}" :active="request()->routeIs('before20thcat')">
                                                                {{ __('Before 20th century') }}</x-jet-nav-link></li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Country
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li  class="dropdown-item">    <x-jet-nav-link href="{{ route('italycat') }}" :active="request()->routeIs('italycat')">
                                                                {{ __('Italy') }}</x-jet-nav-link></li>
                                                        <li  class="dropdown-item">    <x-jet-nav-link href="{{ route('englandcat') }}" :active="request()->routeIs('englandcat')">
                                                                {{ __('England') }}</x-jet-nav-link></li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Language
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li  class="dropdown-item">    <x-jet-nav-link href="{{ route('italiancat') }}" :active="request()->routeIs('italiancat')">
                                                                {{ __('Italian') }}</x-jet-nav-link></li>
                                                        <li  class="dropdown-item">    <x-jet-nav-link href="{{ route('englishcat') }}" :active="request()->routeIs('englishcat')">
                                                                {{ __('English') }}</x-jet-nav-link></li>
                                                        <li  class="dropdown-item">    <x-jet-nav-link href="{{ route('russiancat') }}" :active="request()->routeIs('russiancat')">
                                                                {{ __('Russian') }}</x-jet-nav-link></li>
                                                    </ul>
                                                </li>

                                            </ul>
                                            <form >
                                                <input class="form-control lg:px-8" id="SearchInput" type="text" placeholder="Search by id,name,title,etc" aria-label="Search">
                                            </form>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <table class="table table-sm table-hover caption-top">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Type of name</th>
                                <th scope="col">Role</th>
                                <th scope="col">Title</th>
                                <th scope="col">Year</th>
                                <th scope="col">More details</th>
                                <th scope="col">Rent</th>
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
                                    <td>
                                        <a type="button"  class="btn btn-info btn-sm" data-toggle="modal" data-target="#more-details{{$li->id}}">more...</a>
                                    </td>
                                    <td>
                                        @if($li->IsRented =='1')
                                            <p class="text-indigo-600">Reserved</p>
                                        @else
                                            <form method="POST" action="{{url('rent/'.$li->id)}}">
                                                @csrf
                                                <button type="submit" class="btn btn-success btn-sm">rent</button>
                                            </form>
                                        @endif
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
                        @else
                        <h3> Rented books</h3><hr class="dashed">
                        @foreach($rents as $rent)
                                 {{$rent->rented->Title}} <b>by </b>{{$rent->rented->Name}} was rented by <b>{{$rent->renter->name}}</b> in <b> {{\Carbon\Carbon::parse($rent->created__at)->diffForHumans() }}</b><hr class="dashed"><br>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

