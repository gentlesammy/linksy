@extends('layouts.admin')

@section("content")

<div class="hero py-2">
    <div class="container bg-white text-center h-50 py-5">
       <h1>DASHBOARD</h1>
       <p>Manage Users; Links; Templates; Credits; Defaults and Open Banners/Adverts</p>
    </div>
</div>
<div class="container mt-2 p-2 pb-5 dashboard_container">
    <div class="row">
        {{-- //User management column --}}
        <div class="col-md-6">
            <div class="box links_box">
                {{-- //icon --}}
                <i class="fa fa-users" aria-hidden="true"></i>
                {{-- //Heading --}}
                <h3>USERS</h3>
                {{-- //description --}}
                <p>Manage Registered Users</p>
                {{-- action button --}}
                <a href="/admin/users" class="btn btn-primary">Manage Users</a>
            </div>
        </div>

        {{-- //Link management column --}}
        <div class="col-md-6">
            <div class="box settings_box">
                 {{-- //icon --}}
                 <i class="fa fa-link" aria-hidden="true"></i>
                {{-- //Heading --}}
                <h3>LINKS</h3>
                {{-- //description --}}
                <p>Manage User Created Links </p>
                {{-- action button --}}
                <a href="/admin/links" class="btn btn-primary">Manage Links</a>
            </div>
        </div>

        {{-- //Default management column --}}
        <div class="col-md-6">
            <div class="box statistic_box">
                {{-- //icon --}}
                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                {{-- //Heading --}}
                <h3>DEFAULT</h3>
                {{-- //description --}}
                <p>Set default color and background</p>
                {{-- action button --}}
                <a href="/admin/default" class="btn btn-primary">Set Defaults</a>
            </div>
        </div>

        {{-- //Credit management column --}}
        <div class="col-md-6">
            <div class="box Credit_box">
                {{-- //icon --}}
                <i class="fa fa-credit-card" aria-hidden="true"></i>
                {{-- //Heading --}}
                <h3>CREDITS</h3>
                {{-- //description --}}
                <p>Manage User Credit</p>
                {{-- action button --}}
                <a href="/admin/credit" class="btn btn-primary">Manage Credit</a>
            </div>
        </div>

        {{-- //Template management column --}}
        <div class="col-md-6 mt-3">
            <div class="box links_box">
                {{-- //icon --}}
                <i class="fa fa-folder" aria-hidden="true"></i>
                {{-- //Heading --}}
                <h3>TEMPLATES</h3>
                {{-- //description --}}
                <p>Manage Available Templates</p>
                {{-- action button --}}
                <a href="#" class="btn btn-primary">Manage Templates</a>
            </div>
        </div>

        {{-- //Advert/Banner management column --}}
        <div class="col-md-6 mt-3">
            <div class="box settings_box">
                 {{-- //icon --}}
                 <i class="fa fa-file" aria-hidden="true"></i>
                {{-- //Heading --}}
                <h3>Banner/Advert</h3>
                {{-- //description --}}
                <p>Manage Banners and Adverts </p>
                {{-- action button --}}
                <a href="#" class="btn btn-primary">Manage Banners</a>
            </div>
        </div>

    </div>
</div>




@endsection

@section("scripts")
    <script >
        alert("hello");
    </script>
@endsection
