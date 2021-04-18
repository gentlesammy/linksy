@extends('layouts.app')

@section("content")

<div class="hero py-2">
    <div class="container bg-white text-center h-50 py-5">
       <h1>DASHBOARD</h1>
       <p>Links, Settings, Statistic, Credit, Manage them all</p>
    </div>
</div>

<div class="container mt-2 p-2 pb-5 dashboard_container">
    <div class="row">
        {{-- //Links management column --}}
        <div class="col-md-6">
            <div class="box links_box">
                {{-- //icon --}}
                <i class="fa fa-link" aria-hidden="true"></i>
                {{-- //Heading --}}
                <h3>LINKS</h3>
                {{-- //description --}}
                <p>Manage your Links. Create, Edit, View etc</p>
                {{-- action button --}}
                <a href="/dashboard/links" class="btn btn-primary">Manage Links</a>
            </div>
        </div>

        {{-- //Settings management column --}}
        <div class="col-md-6">
            <div class="box settings_box">
                 {{-- //icon --}}
                 <i class="fa fa-cog" aria-hidden="true"></i>
                {{-- //Heading --}}
                <h3>SETTINGS</h3>
                {{-- //description --}}
                <p>Manage Your Profile. Decide how your profile page look</p>
                {{-- action button --}}
                <a href="/dashboard/settings" class="btn btn-primary">Manage Settings</a>
            </div>
        </div>

        {{-- //Statistic management column --}}
        <div class="col-md-6">
            <div class="box statistic_box">
                {{-- //icon --}}
                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                {{-- //Heading --}}
                <h3>STATISTIC</h3>
                {{-- //description --}}
                <p>Overview of your Data. How has your links been faring?</p>
                {{-- action button --}}
                <a href="#" class="btn btn-primary">View Statistic</a>
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
                <p>Achieve much more. Be greedy, go beyond ordinary</p>
                {{-- action button --}}
                <a href="#" class="btn btn-primary">Manage Credit</a>
            </div>
        </div>

    
    </div>
</div>




@endsection
