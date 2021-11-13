<x-app-layout>
    <!--modify users -->
    <div class="container">
        @if(session('suspend'))
            <div class="alert alert-success "  role="alert">
                <b>{{session('suspend')}}</b>
            </div>
        @endif
        @if(session('delete'))
            <div class="alert alert-success" role="alert">
                <b>{{session('delete')}}</b>
            </div>
        @endif
            @if(session('retrieve'))
                <div class="alert alert-success" role="alert">
                    <b>{{session('retrieve')}}</b>
                </div>
            @endif
    <table class="table table-info table-hover caption-top">
        <thead>
        <caption><b>Active users</b></caption>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($usersdata as $user)
            @if($user->name !== 'Admin')
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at->diffForHumans()}}</td>
            <td>{{$user->updated_at->diffForHumans()}}</td>
            <td><a href="{{url('Suspend-user/'.$user->id)}}" class="btn btn-warning">Suspend accouunt</a>  <a type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-user{{$user->id}}">Delete accouunt</a></td>
        </tr>
            @endif
            <!-- Modal -->
            <div class="modal fade" id="delete-user{{$user->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" >Permanent delete</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            You're about to delete <b>{{$user->name}}</b>'s account. Are you sure?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            <a href="{{url('Delete-user/'.$user->id)}}"  class="btn btn-danger">Yes, do it</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </tbody>
    </table>
    </div>
        <!--retrieve users -->
        <div class="container">
            <table class="table table-info table-hover caption-top">
                <thead>
                <caption><b>Supended users</b></caption>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Suspention date</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($trash as $trashed)
                        <tr>
                            <th scope="row">{{$trashed->id}}</th>
                            <td>{{$trashed->name}}</td>
                            <td>{{$trashed->email}}</td>
                            <td>{{$trashed->deleted_at}}</td>
                            <td><a href="{{url('Retreive-user/'.$trashed->id)}}" class="btn btn-info">Retrieve accouunt</a>  <a type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-user{{$trashed->id}}">Delete accouunt</a></td>
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="delete-user{{$trashed->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" >Permanent delete</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        You're about to delete <b>{{$trashed->name}}</b>'s account. Are you sure?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                        <a href="{{url('Delete-user/'.$user->id)}}"  class="btn btn-danger">Yes, do it</a>
                                    </div>
                                </div>
                            </div>
        @endforeach
                </tbody>
            </table>
            {{$trash->links()}}
        </div>
</x-app-layout>


