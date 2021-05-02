@extends('layouts.site')

@section("content")

<section class="hero">
    <div class="container hero_container">
        <div class="text-container">
            <h1>LINKSTER</h1>
            <p>A single page to show all Links that matters to you.
            Now you can connect with your audience using just a single link! Call it Link Bank</p>
            <a href="/register" class="btn btn-primary btn-lg">Start Using</a>
            <a href="" class="btn btn-primary btn-lg">How It works</a>
        </div>

        <div class="image-container">
            <img src="/images/hero.png" alt="Linkster Hero Image" class="img img-fluid top" />
        </div>

    </div>
</section>

<section class="advantage">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 advantage_box">
                <div class="box_cover">
                    <div class="icon icon-danger"><i class="fa fa-share-alt" aria-hidden="true"></i></div>
                    <div class="description">
                        <div class="h4">Share Your Links </div>
                        <p class="text-muted">Share all your scattered links in one single and sharable link</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 advantage_box">
                <div class="box_cover"> 
                    <div class="icon icon-danger"><i class="fa fa-cog" aria-hidden="true"></i></div>
                    <div class="description">
                    <div class="h4">Easy to Customize</div>
                    <p class="text-muted">Set Background color, text color, profile image, description easily</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 advantage_box">
                <div class="box_cover">
                    <div class="icon icon-danger"><i class="fa fa-link" aria-hidden="true"></i></div>
                    <div class="description">
                    <div class="h4">Personalised Link</div>
                    <p class="text-muted">Choose a single name that describes you and have your link</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 advantage_box">
                <div class="box_cover">
                    <div class="icon icon-danger"><i class="fa fa-desktop" aria-hidden="true"></i></div>
                    <div class="description">
                    <div class="h4">Color Schemes </div>
                    <p class="text-muted">Not Good with color? Choose what suite you from our templates</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 advantage_box">
                <div class="box_cover">
                    <div class="icon icon-danger"><i class="fa fa-file-text" aria-hidden="true"></i></div>
                    <div class="description">
                    <div class="h4">SEO Friendly Link</div>
                    <p class="text-muted">Your page has basic SEO friendly features, to  ensure vissibility</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 advantage_box">
                <div class="box_cover">
                    <div class="icon icon-danger"><i class="fa fa-bar-chart" aria-hidden="true"></i></div>
                    <div class="description">
                    <div class="h4">Link Visitor Statistic</div>
                    <p class="text-muted">Vital statistic of visitors clicking on each link are recorded.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="writer-show show-section">
    <div class="container writer-box">
        {{-- image side --}}
        <div class="image_part">
            <div class="image_container">
                <img src="/images/writer.PNG" alt="my linkster for writers"/>
            </div>
        </div>

        {{-- text side --}}
        <div class="text_part">
            <h3>Linkster for Writers</h3>
            <p>
                As a writer, I have my write ups scattered all over the internet, for example facebook groups here and there, in some blogs, even
                on my social media timeline. How do i have all these readily available to my readers or prospective client without stress? I have them
                listed on a page where anyone can go and click the one they love to read. Linkster has helped me to reach more audience easily with
                all my contents in one place.
            </p>

            <p>
                Are you a writer? Start using Linkster to keep links to all your write ups. Your reader will like it and a prospective client will 
                appreciate it. 

            </p>
            <a href="/register" class="btn btn-primary btn-lg">Start Using</a>
            <a href="" class="btn btn-primary btn-lg">Other Usage</a>
        </div>
    </div>
</section>

<section class="showoff_app"> 
    <div class="container cover">
        <h3 class="text-center">
            "ONE BIG advantage of Linkster for me is the chance to know how many people are clicking my links,
            their location and some other premium details. Link Management has never been easier!"
        </h3>
        <h4>- Emmanuel Odunlade</h4>
        <a href="/register" class="btn btn-primary btn-lg">Start Using</a>

    </div>
</section>
@endsection
