@extends('layouts.app')

@section("content")
    <div class="hero">
        <div class="container text-center bg-white h-50 py-5">
            <h1 class="">Settings</h1>
            <div class="options">
                <a href="/dashboard">Back to Dashboard</a>
            </div>
        </div>
    </div>

    <div class="settingsbox">
        <div class="container">
            <div class="row">
                {{-- edit color settings --}}
                <div class="col-md-6 py-3">
                    <div class="form_container bg-white p-5">
                        <h3 class="mb-3 p-3" style="background:{{auth()->user()->background}}; color:{{auth()->user()->color}}; ">Update Color and <span>Background</span></h3>
                        <form action="/dashboard/settings/color" method="post">
                            @method("patch")
                            @csrf
                            <div class="mb-3">
                                <label for="linktitle" class="form-label">Background Color</label>
                                <input type="color" class="form-control {{$errors->first("background") ? "is-invalid" : ""}}" name="background" id="input" aria-describedby="select background color" placeholder="" value={{old("background")}}>
                                @if ($errors->first("name"))
                                    <div class="invalid-feedback">{{$errors->first("background")}}</div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="Color" class="form-label">Color</label>
                                <input type="color" name="color" class="form-control {{$errors->first("color") ? "is-invalid" : ""}}" id="link" aria-describedby="color input" placeholder="" value={{old("color")}}>
                                @if ($errors->first("link"))
                                    <div class="invalid-feedback">{{$errors->first("color")}}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update Color</button>
                            </div>

                        </form>
                    </div>
                </div>
                {{-- future Note on this --}}
                <div class="col-md-6 py-3">
                    <div class="future_container bg-white p-5">
                        <h3 class="mb-3 p-3" style="background:{{auth()->user()->background}}; color:{{auth()->user()->color}}; ">How to Select <span>Color</span></h3>
                        <p>The background color and text color  of the heading you see above are your current active colors. Select only two contrast colors 
                            Custom themes are however available for few yejd points
                        </p>
                        

                    </div>
                    <div class="future_container bg-white px-5 pb-1">
                        <h3 class="mb-3 p-3" style="background:{{auth()->user()->background}}; color:{{auth()->user()->color}}; ">Next <span>UPDATE</span></h3>
                        <p>Next Update will allow you to update the look of your pages using template images, we are almost there</p>

                    </div>

                </div>
                {{-- edit description settings --}}
                <div class="col-md-6 py-3">
                    <div class="desc_container bg-white p-5">
                        
                    </div>
                </div>
                {{-- edit image settings --}}
                <div class="col-md-6">
        
                </div>

                {{-- edit image settings --}}
                <div class="col-md-6">
                
                </div>

        
            </div>
        </div>
    </div>   



@endsection