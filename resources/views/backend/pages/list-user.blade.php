@extends("backend.master-backend")
@section("NoiDung")

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">List User</h1>
<p class="mb-4">Lấy dữ liệu từ database</p>

<a href="{{route('create-post')}}" class="btn btn-success pull-right">Add New User</a><br><br>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List User</h6>
    </div>
    <div class="card-body" id="app">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Edit | Delete</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Edit | Delete</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($listuser as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <th>
                        @if($user->role == ROLE_CEO)
                            CEO
                        @elseif($user->role == ROLE_MANAGER_ROOM)
                            MANAGER OF ... ROOM
                        @elseif($user->role == ROLE_TEAM_LEADER)
                            TEAM LEADER OF PROJECT ...
                        @elseif($user->role == ROLE_MEMBER)
                            MEMBER OF TEAM ...
                        @endif
                        </th>
                        <td>
                            <a href="" class="btn btn-primary">Edit</a> ||
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
