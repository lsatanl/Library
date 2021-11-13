<x-app-layout>
    <div class="container">
        <div class="alert alert-primary d-flex align-items-center" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>
        <div>
            You are editing book data by id : {{$find_book->BL_record_ID}}
        </div>
    </div>
        @if(session('changed'))
            <div class="alert alert-success" role="alert">
                <b>{{session('changed')}}</b>
            </div>
        @endif
        <div class="accordion accordion-flush">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Name
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <form class="row g-3" action="{{url('name1/'.$find_book->id)}}" method="POST">
                            @csrf
                            <div class="col-auto">
                                <p> Current:</p>
                                <input type="text" readonly class="form-control-plaintext" id="current" value="{{$find_book->Name}}">
                            </div>
                            <div class="col-5">
                                <p>New:</p>
                                <textarea class="form-control" id="changedata" name="name" rows="1"></textarea>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit"  class="btn btn-primary mb-3">change and continue</button>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" method="POST" formaction="{{url('name2/'.$find_book->id)}}" class="btn btn-info mb-3">change and back to database page</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Type of name
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <form class="row g-3" action="{{url('Type_of_name1/'.$find_book->id)}}" method="POST">
                            @csrf
                            <div class="col-auto">
                                <p> Current:</p>
                                <input type="text" readonly class="form-control-plaintext" id="current" value="{{$find_book->Type_of_name}}">
                            </div>
                            <div class="col-5">
                                <p>New:</p>
                                <textarea class="form-control" id="input" name="Type_of_name" rows="1"></textarea>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" class="btn btn-primary mb-3">change and continue</button>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" method="POST" formaction="{{url('Type_of_name2/'.$find_book->id)}}" class="btn btn-info mb-3">change and back to database page</button>
                            </div>
                        </form>
                        </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Role
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <form class="row g-3" action="{{url('Role1/'.$find_book->id)}}" method="POST">
                            @csrf
                            <div class="col-auto">
                                <p> Current:</p>
                                <input type="text" readonly class="form-control-plaintext" id="current" value="{{$find_book->Role}}">
                            </div>
                            <div class="col-5">
                                <p>New:</p>
                                <textarea class="form-control" id="input" name="Role" rows="1"></textarea>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" class="btn btn-primary mb-3">change and continue</button>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" method="POST" formaction="{{url('Role2/'.$find_book->id)}}" class="btn btn-info mb-3">change and back to database page</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading4">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                        Title
                    </button>
                </h2>
                <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <form class="row g-3" action="{{url('Title1/'.$find_book->id)}}" method="POST">
                            @csrf
                            <div class="col-auto">
                                <p> Current:</p>
                                <input type="text" readonly class="form-control-plaintext" id="current" value="{{$find_book->Title}}">
                            </div>
                            <div class="col-5">
                                <p>New:</p>
                                <textarea class="form-control" id="input" name="Title" rows="1"></textarea>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" class="btn btn-primary mb-3">change and continue</button>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" method="POST" formaction="{{url('Title2/'.$find_book->id)}}" class="btn btn-info mb-3">change and back to database page</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading5">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                        Year
                    </button>
                </h2>
                <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <form class="row g-3" action="{{url('Date_of_creation_or_publication1/'.$find_book->id)}}" method="POST">
                            @csrf
                            <div class="col-auto">
                                <p> Current:</p>
                                <input type="text" readonly class="form-control-plaintext" id="current" value="{{$find_book->Date_of_creation_or_publication}}">
                            </div>
                            <div class="col-5">
                                <p>New:</p>
                                <textarea class="form-control" id="input" name="Date_of_creation_or_publication" rows="1"></textarea>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" class="btn btn-primary mb-3">change and continue</button>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" method="POST" formaction="{{url('Date_of_creation_or_publication2/'.$find_book->id)}}" class="btn btn-info mb-3">change and back to database page</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading6">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                        Dates associated with name
                    </button>
                </h2>
                <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <form class="row g-3" action="{{url('Dates_associated_with_name1/'.$find_book->id)}}" method="POST">
                            @csrf
                            <div class="col-auto">
                                <p> Current:</p>
                                <input type="text" readonly class="form-control-plaintext" id="current" value="{{$find_book->Dates_associated_with_name}}">
                            </div>
                            <div class="col-5">
                                <p>New:</p>
                                <textarea class="form-control" id="input" name="Dates_associated_with_name" rows="1"></textarea>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" class="btn btn-primary mb-3">change and continue</button>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" method="POST" formaction="{{url('Dates_associated_with_name2/'.$find_book->id)}}" class="btn btn-info mb-3">change and back to database page</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading7">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
                        Type of resource
                    </button>
                </h2>
                <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <form class="row g-3" action="{{url('Type_of_resource1/'.$find_book->id)}}" method="POST">
                            @csrf
                            <div class="col-auto">
                                <p> Current:</p>
                                <input type="text" readonly class="form-control-plaintext" id="current" value="{{$find_book->Type_of_resource}}">
                            </div>
                            <div class="col-5">
                                <p>New:</p>
                                <textarea class="form-control" id="input" name="Type_of_resource" rows="1"></textarea>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" class="btn btn-primary mb-3">change and continue</button>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" method="POST" formaction="{{url('Type_of_resource2/'.$find_book->id)}}" class="btn btn-info mb-3">change and back to database page</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading8">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse8" aria-expanded="false" aria-controls="flush-collapse8">
                        Content type
                    </button>
                </h2>
                <div id="flush-collapse8" class="accordion-collapse collapse" aria-labelledby="flush-heading8" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <form class="row g-3" action="{{url('Content_type1/'.$find_book->id)}}" method="POST">
                            @csrf
                            <div class="col-auto">
                                <p> Current:</p>
                                <input type="text" readonly class="form-control-plaintext" id="current" value="{{$find_book->Content_type}}">
                            </div>
                            <div class="col-5">
                                <p>New:</p>
                                <textarea class="form-control" id="input" name="Content_type" rows="1"></textarea>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" class="btn btn-primary mb-3">change and continue</button>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" method="POST" formaction="{{url('Content_type2/'.$find_book->id)}}" class="btn btn-info mb-3">change and back to database page</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading9">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse9" aria-expanded="false" aria-controls="flush-collapse9">
                        Other names
                    </button>
                </h2>
                <div id="flush-collapse9" class="accordion-collapse collapse" aria-labelledby="flush-heading9" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <form class="row g-3" action="{{url('Other_names1/'.$find_book->id)}}" method="POST">
                            @csrf
                            <div class="col-auto">
                                <p> Current:</p>
                                <input type="text" readonly class="form-control-plaintext" id="current" value="{{$find_book->Other_names}}">
                            </div>
                            <div class="col-5">
                                <p>New:</p>
                                <textarea class="form-control" id="input" name="Other_names" rows="1"></textarea>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" class="btn btn-primary mb-3">change and continue</button>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" method="POST" formaction="{{url('Other_names2/'.$find_book->id)}}" class="btn btn-info mb-3">change and back to database page</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading10">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse10" aria-expanded="false" aria-controls="flush-collapse10">
                        Material type
                    </button>
                </h2>
                <div id="flush-collapse10" class="accordion-collapse collapse" aria-labelledby="flush-heading10" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <form class="row g-3" action="{{url('Material_type1/'.$find_book->id)}}" method="POST">
                            @csrf
                            <div class="col-auto">
                                <p> Current:</p>
                                <input type="text" readonly class="form-control-plaintext" id="current" value="{{$find_book->Material_type}}">
                            </div>
                            <div class="col-5">
                                <p>New:</p>
                                <textarea class="form-control" id="input" name="Material_type" rows="1"></textarea>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" class="btn btn-primary mb-3">change and continue</button>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" method="POST" formaction="{{url('Material_type2/'.$find_book->id)}}" class="btn btn-info mb-3">change and back to database page</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading11">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse11" aria-expanded="false" aria-controls="flush-collapse11">
                        BNB number
                    </button>
                </h2>
                <div id="flush-collapse11" class="accordion-collapse collapse" aria-labelledby="flush-heading11" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <form class="row g-3" action="{{url('BNB_number1/'.$find_book->id)}}" method="POST">
                        @csrf
                        <div class="col-auto">
                            <p> Current:</p>
                            <input type="text" readonly class="form-control-plaintext" id="current" value="{{$find_book->BNB_number}}">
                        </div>
                        <div class="col-5">
                            <p>New:</p>
                            <textarea class="form-control" id="input" name="BNB_number" rows="1"></textarea>
                        </div>
                        <div class="col-auto">
                            <br>
                            <button type="submit" class="btn btn-primary mb-3">change and continue</button>
                        </div>
                        <div class="col-auto">
                            <br>
                            <button type="submit" method="POST" formaction="{{url('BNB_number/'.$find_book->id)}}" class="btn btn-info mb-3">change and back to database page</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading12">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse12" aria-expanded="false" aria-controls="flush-collapse12">
                        Archival Resource Key
                    </button>
                </h2>
                <div id="flush-collapse12" class="accordion-collapse collapse" aria-labelledby="flush-heading12" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <form class="row g-3" action="{{url('Archival_Resource_Key1/'.$find_book->id)}}" method="POST">
                            @csrf
                            <div class="col-auto">
                                <p> Current:</p>
                                <input type="text" readonly class="form-control-plaintext" id="current" value="{{$find_book->Archival_Resource_Key}}">
                            </div>
                            <div class="col-5">
                                <p>New:</p>
                                <textarea class="form-control" id="input" name="Archival_Resource_Key" rows="1"></textarea>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" class="btn btn-primary mb-3">change and continue</button>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" method="POST" formaction="{{url('Archival_Resource_Key2/'.$find_book->id)}}" class="btn btn-info mb-3">change and back to database page</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading13">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse13" aria-expanded="false" aria-controls="flush-collapse13">
                        ISBN
                    </button>
                </h2>
                <div id="flush-collapse13" class="accordion-collapse collapse" aria-labelledby="flush-heading13" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <form class="row g-3" action="{{url('ISBN1/'.$find_book->id)}}" method="POST">
                            @csrf
                            <div class="col-auto">
                                <p> Current:</p>
                                <input type="text" readonly class="form-control-plaintext" id="current" value="{{$find_book->ISBN}}">
                            </div>
                            <div class="col-5">
                                <p>New:</p>
                                <textarea class="form-control" id="input" name="ISBN" rows="1"></textarea>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" class="btn btn-primary mb-3">change and continue</button>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" method="POST" formaction="{{url('ISBN2/'.$find_book->id)}}" class="btn btn-info mb-3">change and back to database page</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading14">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse14" aria-expanded="false" aria-controls="flush-collapse14">
                        Variant titles
                    </button>
                </h2>
                <div id="flush-collapse14" class="accordion-collapse collapse" aria-labelledby="flush-heading14" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <form class="row g-3" action="{{url('Variant_titles1/'.$find_book->id)}}" method="POST">
                            @csrf
                            <div class="col-auto">
                                <p> Current:</p>
                                <input type="text" readonly class="form-control-plaintext" id="current" value="{{$find_book->Variant_titles}}">
                            </div>
                            <div class="col-5">
                                <p>New:</p>
                                <textarea class="form-control" id="input" name="Variant_titles" rows="1"></textarea>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" class="btn btn-primary mb-3">change and continue</button>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" method="POST" formaction="{{url('Variant_titles2/'.$find_book->id)}}" class="btn btn-info mb-3">change and back to database page</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading15">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse15" aria-expanded="false" aria-controls="flush-collapse15">
                        Series title
                    </button>
                </h2>
                <div id="flush-collapse15" class="accordion-collapse collapse" aria-labelledby="flush-heading15" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <form class="row g-3" action="{{url('Series_title1/'.$find_book->id)}}" method="POST">
                            @csrf
                            <div class="col-auto">
                                <p> Current:</p>
                                <input type="text" readonly class="form-control-plaintext" id="current" value="{{$find_book->Series_title}}">
                            </div>
                            <div class="col-5">
                                <p>New:</p>
                                <textarea class="form-control" id="input" name="Series_title" rows="1"></textarea>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" class="btn btn-primary mb-3">change and continue</button>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" method="POST" formaction="{{url('Series_title2/'.$find_book->id)}}" class="btn btn-info mb-3">change and back to database page</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading16">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse16" aria-expanded="false" aria-controls="flush-collapse16">
                        Number within series
                    </button>
                </h2>
                <div id="flush-collapse16" class="accordion-collapse collapse" aria-labelledby="flush-heading16" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <form class="row g-3" action="{{url('Number_within_series1/'.$find_book->id)}}" method="POST">
                            @csrf
                            <div class="col-auto">
                                <p> Current:</p>
                                <input type="text" readonly class="form-control-plaintext" id="current" value="{{$find_book->Number_within_series}}">
                            </div>
                            <div class="col-5">
                                <p>New:</p>
                                <textarea class="form-control" id="input" name="Number_within_series" rows="1"></textarea>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" class="btn btn-primary mb-3">change and continue</button>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" method="POST" formaction="{{url('Number_within_series2/'.$find_book->id)}}" class="btn btn-info mb-3">change and back to database page</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading17">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse17" aria-expanded="false" aria-controls="flush-collapse17">
                        Country of publication
                    </button>
                </h2>
                <div id="flush-collapse17" class="accordion-collapse collapse" aria-labelledby="flush-heading17" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <form class="row g-3" action="{{url('Country_of_publication1/'.$find_book->id)}}" method="POST">
                            @csrf
                            <div class="col-auto">
                                <p> Current:</p>
                                <input type="text" readonly class="form-control-plaintext" id="current" value="{{$find_book->Country_of_publication}}">
                            </div>
                            <div class="col-5">
                                <p>New:</p>
                                <textarea class="form-control" id="input" name="Country_of_publication" rows="1"></textarea>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" class="btn btn-primary mb-3">change and continue</button>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" method="POST" formaction="{{url('Country_of_publication2/'.$find_book->id)}}" class="btn btn-info mb-3">change and back to database page</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading18">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse18" aria-expanded="false" aria-controls="flush-collapse18">
                        Place of publication
                    </button>
                </h2>
                <div id="flush-collapse18" class="accordion-collapse collapse" aria-labelledby="flush-heading18" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <form class="row g-3" action="{{url('Place_of_publication1/'.$find_book->id)}}" method="POST">
                            @csrf
                            <div class="col-auto">
                                <p> Current:</p>
                                <input type="text" readonly class="form-control-plaintext" id="current" value="{{$find_book->Place_of_publication}}">
                            </div>
                            <div class="col-5">
                                <p>New:</p>
                                <textarea class="form-control" id="input" name="Place_of_publication" rows="1"></textarea>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" class="btn btn-primary mb-3">change and continue</button>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" method="POST" formaction="{{url('Place_of_publication2/'.$find_book->id)}}" class="btn btn-info mb-3">change and back to database page</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading19">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse19" aria-expanded="false" aria-controls="flush-collapse19">
                        Publisher
                    </button>
                </h2>
                <div id="flush-collapse19" class="accordion-collapse collapse" aria-labelledby="flush-heading19" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <form class="row g-3" action="{{url('Publisher1/'.$find_book->id)}}" method="POST">
                            @csrf
                            <div class="col-auto">
                                <p> Current:</p>
                                <input type="text" readonly class="form-control-plaintext" id="current" value="{{$find_book->Publisher}}">
                            </div>
                            <div class="col-5">
                                <p>New:</p>
                                <textarea class="form-control" id="input" name="Publisher" rows="1"></textarea>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" class="btn btn-primary mb-3">change and continue</button>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" method="POST" formaction="{{url('Publisher2/'.$find_book->id)}}" class="btn btn-info mb-3">change and back to database page</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading20">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse20" aria-expanded="false" aria-controls="flush-collapse20">
                        Edition
                    </button>
                </h2>
                <div id="flush-collapse20" class="accordion-collapse collapse" aria-labelledby="flush-heading20" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <form class="row g-3" action="{{url('Edition1/'.$find_book->id)}}" method="POST">
                            @csrf
                            <div class="col-auto">
                                <p> Current:</p>
                                <input type="text" readonly class="form-control-plaintext" id="current" value="{{$find_book->Edition}}">
                            </div>
                            <div class="col-5">
                                <p>New:</p>
                                <textarea class="form-control" id="input" name="Edition" rows="1"></textarea>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" class="btn btn-primary mb-3">change and continue</button>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" method="POST" formaction="{{url('Edition2/'.$find_book->id)}}" class="btn btn-info mb-3">change and back to database page</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading21">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse21" aria-expanded="false" aria-controls="flush-collapse21">
                        Physical description
                    </button>
                </h2>
                <div id="flush-collapse21" class="accordion-collapse collapse" aria-labelledby="flush-heading21" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <form class="row g-3" action="{{url('Physical_description1/'.$find_book->id)}}" method="POST">
                            @csrf
                            <div class="col-auto">
                                <p> Current:</p>
                                <input type="text" readonly class="form-control-plaintext" id="current" value="{{$find_book->Physical_description}}">
                            </div>
                            <div class="col-5">
                                <p>New:</p>
                                <textarea class="form-control" id="input" name="Physical_description" rows="1"></textarea>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" class="btn btn-primary mb-3">change and continue</button>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" method="POST" formaction="{{url('Physical_description2/'.$find_book->id)}}" class="btn btn-info mb-3">change and back to database page</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading22">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse22" aria-expanded="false" aria-controls="flush-collapse22">
                        Dewey classification
                    </button>
                </h2>
                <div id="flush-collapse22" class="accordion-collapse collapse" aria-labelledby="flush-heading22" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <form class="row g-3" action="{{url('Dewey_classification1/'.$find_book->id)}}" method="POST">
                            @csrf
                            <div class="col-auto">
                                <p> Current:</p>
                                <input type="text" readonly class="form-control-plaintext" id="current" value="{{$find_book->Dewey_classification}}">
                            </div>
                            <div class="col-5">
                                <p>New:</p>
                                <textarea class="form-control" id="input" name="Dewey_classification" rows="1"></textarea>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" class="btn btn-primary mb-3">change and continue</button>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" method="POST" formaction="{{url('Dewey_classification2/'.$find_book->id)}}" class="btn btn-info mb-3">change and back to database page</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading23">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse23" aria-expanded="false" aria-controls="flush-collapse23">
                        BL shelfmark
                    </button>
                </h2>
                <div id="flush-collapse23" class="accordion-collapse collapse" aria-labelledby="flush-heading23" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <form class="row g-3" action="{{url('BL_shelfmark1/'.$find_book->id)}}" method="POST">
                            @csrf
                            <div class="col-auto">
                                <p> Current:</p>
                                <input type="text" readonly class="form-control-plaintext" id="current" value="{{$find_book->BL_shelfmark}}">
                            </div>
                            <div class="col-5">
                                <p>New:</p>
                                <textarea class="form-control" id="input" name="BL_shelfmark" rows="1"></textarea>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" class="btn btn-primary mb-3">change and continue</button>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" method="POST" formaction="{{url('BL_shelfmark2/'.$find_book->id)}}" class="btn btn-info mb-3">change and back to database page</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading24">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse24" aria-expanded="false" aria-controls="flush-collapse24">
                        Genre
                    </button>
                </h2>
                <div id="flush-collapse24" class="accordion-collapse collapse" aria-labelledby="flush-heading24" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <form class="row g-3" action="{{url('Genre1/'.$find_book->id)}}" method="POST">
                            @csrf
                            <div class="col-auto">
                                <p> Current:</p>
                                <input type="text" readonly class="form-control-plaintext" id="current" value="{{$find_book->Genre}}">
                            </div>
                            <div class="col-5">
                                <p>New:</p>
                                <textarea class="form-control" id="input" name="Genre" rows="1"></textarea>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" class="btn btn-primary mb-3">change and continue</button>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" method="POST" formaction="{{url('Genre2/'.$find_book->id)}}" class="btn btn-info mb-3">change and back to database page</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading25">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse25" aria-expanded="false" aria-controls="flush-collapse25">
                        Languages
                    </button>
                </h2>
                <div id="flush-collapse25" class="accordion-collapse collapse" aria-labelledby="flush-heading25" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <form class="row g-3" action="{{url('Languages1/'.$find_book->id)}}" method="POST">
                            @csrf
                            <div class="col-auto">
                                <p> Current:</p>
                                <input type="text" readonly class="form-control-plaintext" id="current" value="{{$find_book->Languages}}">
                            </div>
                            <div class="col-5">
                                <p>New:</p>
                                <textarea class="form-control" id="input" name="Languages" rows="1"></textarea>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" class="btn btn-primary mb-3">change and continue</button>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" method="POST" formaction="{{url('Languages2/'.$find_book->id)}}" class="btn btn-info mb-3">change and back to database page</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading26">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse26" aria-expanded="false" aria-controls="flush-collapse26">
                        Notes
                    </button>
                </h2>
                <div id="flush-collapse26" class="accordion-collapse collapse" aria-labelledby="flush-heading26" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <form class="row g-3" action="{{url('Notes1/'.$find_book->id)}}" method="POST">
                            @csrf
                            <div class="col-auto">
                                <p> Current:</p>
                                <input type="text" readonly class="form-control-plaintext" id="current" value="{{$find_book->Notes}}">
                            </div>
                            <div class="col-5">
                                <p>New:</p>
                                <textarea class="form-control" id="input" name="Notes" rows="1"></textarea>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" class="btn btn-primary mb-3">change and continue</button>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" method="POST" formaction="{{url('Notes2/'.$find_book->id)}}" class="btn btn-info mb-3">change and back to database page</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading27">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse27" aria-expanded="false" aria-controls="flush-collapse27">
                        Provenance
                    </button>
                </h2>
                <div id="flush-collapse27" class="accordion-collapse collapse" aria-labelledby="flush-heading27" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <form class="row g-3" action="{{url('Provenance1/'.$find_book->id)}}" method="POST">
                            @csrf
                            <div class="col-auto">
                                <p> Current:</p>
                                <input type="text" readonly class="form-control-plaintext" id="current" value="{{$find_book->Provenance}}">
                            </div>
                            <div class="col-5">
                                <p>New:</p>
                                <textarea class="form-control" id="input" name="Provenance" rows="1"></textarea>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" class="btn btn-primary mb-3">change and continue</button>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" method="POST" formaction="{{url('Provenance2/'.$find_book->id)}}" class="btn btn-info mb-3">change and back to database page</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading28">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse28" aria-expanded="false" aria-controls="flush-collapse28">
                        Topics
                    </button>
                </h2>
                <div id="flush-collapse28" class="accordion-collapse collapse" aria-labelledby="flush-heading28" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <form class="row g-3" action="{{url('Topics1/'.$find_book->id)}}" method="POST">
                            @csrf
                            <div class="col-auto">
                                <p> Current:</p>
                                <input type="text" readonly class="form-control-plaintext" id="current" value="{{$find_book->Topics}}">
                            </div>
                            <div class="col-5">
                                <p>New:</p>
                                <textarea class="form-control" id="input" name="Topics" rows="1"></textarea>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" class="btn btn-primary mb-3">change and continue</button>
                            </div>
                            <div class="col-auto">
                                <br>
                                <button type="submit" method="POST" formaction="{{url('Topics2/'.$find_book->id)}}" class="btn btn-info mb-3">change and back to database page</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
</x-app-layout>
