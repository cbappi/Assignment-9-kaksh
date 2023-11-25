@extends('Layout.master')

@section('content')



    <div class="container mt-5">
        <h1 class="text-center mb-4">My Projects</h1>

        <div class="row">
            <!-- Project 1 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="{{asset('images/content-11.jpg')}}"  class="card-img-top" alt="Project 1">
                    <div class="card-body">
                        <h5 class="card-title">Project - Content Writing</h5>
                        <p class="card-text">For website www.shoppingreview100.com, I provided categories and based on these categories I wrote contents. Content quantity more than fifteen</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="{{asset('images/seo-1.jpg')}}" class="card-img-top" alt="Project 2">
                    <div class="card-body">
                        <h5 class="card-title">Project - Website SEO</h5>
                        <p class="card-text">Every website needs organic traffic but sometime need paid traffic also. For website www.shoppingreview100.com, I applied seo tricks as well as  made keyword reaseach</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="{{asset('images/adword-1.jpg')}}" class="card-img-top" alt="Project 3">
                    <div class="card-body">
                        <h5 class="card-title">Project - Google Ad Setup</h5>
                        <p class="card-text">For website www.shoppingreview100.com, I made google campaign for this site, this site sell affiliate products and accordingly google ad setup created by me.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection













