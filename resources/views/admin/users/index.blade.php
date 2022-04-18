@extends('layouts.admin')

@section("content")
    <div class="hero">
        <div class="container text-center bg-white h-50 py-5">
        <h1 class="">Manage Users </h1>
        <div class="options">
                <a href="/admin">Go Back to Admin Dashboard</a>
        </div>
        </div>
    </div>

    <div class="container">
    <div class="row">
        @if (count($users) > 0)
            <div class="table-responsive">
                <table class="table table-bordered mb-5">
                    <thead>
                        <tr class="table-success">
                            <th scope="col">#</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Description</th>
                            <th scope="col">Role</th>
                            <th scope="col">Total Visit</th>
                            <th scope="col">Created</th>
                            <th scope="col">Manage User</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $sn = 1; ?>
                            @foreach($users as $data)
                                <tr>
                                    <th scope="row">{{$sn++}}</th>
                                    <td>{{ $data->username }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->description }}</td>
                                    <td>{{ $data->role }}</td>
                                    <td>{{ $data->total_visit_count }}</td>
                                    <td>{{ $data->created_at}}</td>
                                    <td>
                                    <a href="/dashboard/links/{{$data->id}}" class="btn btn-primary"><i class="fa fa-pencil-square-o text-white" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="noLink text-center" style="text-align:center !important;">
                <h3 class=" py-3 px-2 text-info">No Registered User in the Database</h3>
            </div>
        @endif
        {{-- Pagination --}}
        <div class="d-flex justify-content-center">
            {!! $users->links() !!}
        </div>
    </div>
</div>



















@endsection
