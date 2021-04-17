@extends('layouts.app')

@section("content")

<div class="hero bg-dark py-2">
    <div class="container text-center bg-white h-50 py-5">
       <h1 class="">Create Link</h1>
       <div class="options">
            <a href="/dashboard">Back to Dashboard</a> |
           <a href="/dashboard/links">Back to Links</a>
       </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="formarea py-5">
                <form action="/dashboard/links/new" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="linktitle" class="form-label">Link Title</label>
                        <input type="text" class="form-control {{$errors->first("name") ? "is-invalid" : ""}}" name="name" id="input" aria-describedby="link title input" placeholder="Link Title" value={{old("name")}}>
                        @if ($errors->first("name"))
                            <div class="invalid-feedback">{{$errors->first("name")}}</div>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="linkAddress" class="form-label">Link Address</label>
                        <input type="text" name="link" class="form-control {{$errors->first("name") ? "is-invalid" : ""}}" id="link" aria-describedby="link address input" placeholder="https://samodun.herokuapp.com/" value={{old("link")}}>
                        @if ($errors->first("link"))
                            <div class="invalid-feedback">{{$errors->first("link")}}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Create Link</button>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>



@endsection
