@extends('layouts.app')

@section("content")


<div class="hero">
    <div class="container text-center bg-white h-50 py-5">
       <h1 class="">Links</h1>
       <div class="options">
            <a href="/dashboard">Back to Dashboard</a> |
           <a href="/dashboard/links/new">Create New Link</a>
       </div>
    </div>
</div>

<div class="container">
    <div class="row">
        @if (count($links) > 0)
            <div class="table-responsive">
                <table class="table table-bordered mb-5">
                    <thead>
                        <tr class="table-success">
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Link</th>
                            <th scope="col">Number of Visits</th>
                            <th scope="col">Created</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                            @foreach($links as $data)
                                <tr>
                                    <th scope="row">{{ $data->id }}</th>
                                    <td>{{ $data->name }}</td>
                                    <td><a href="{{ $data->link }}">{{ $data->link }}</a></td>
                                    <td>{{$data->visits->count()}}</td>
                                    <td>{{ $data->created_at}}</td>
                                    <td>
                                        <form action="/dashboard/links/{{$data->id}}" method="POST">
                                            <a href="/dashboard/links/{{$data->id}}" class="btn btn-primary"><i class="fa fa-pencil-square-o text-white" aria-hidden="true"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="noLink text-center" style="text-align:center !important;">
                <h3 class=" py-3 px-2 text-info">You do not have Links Yet. Start Creating Links</h3>
            </div>
        @endif
        {{-- Pagination --}}
        <div class="d-flex justify-content-center">
            {!! $links->links() !!}
        </div>
    </div>
</div>




@endsection
