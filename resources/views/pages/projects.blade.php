@extends('Layout.master')

@section('content')

    {{-- @include('Component.takecare') --}}




    <div class="container mt-5">
        <h1 class="text-center mb-4">My Projects</h1>

        <div class="row">
            <!-- Project 1 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="{{asset('images/content-11.jpg')}}"  class="card-img-top" alt="Project 1">
                    <div class="card-body">
                        <h5 class="card-title">Project - Content Writing</h5>
                        <p class="card-text">Description of Project 1 goes here. Provide some details about what the project is about and the technologies used.</p>
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
                        <p class="card-text">Description of Project 2 goes here. Provide some details about what the project is about and the technologies used.</p>
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
                        <p class="card-text">Description of Project 3 goes here. Provide some details about what the project is about and the technologies used.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </body>
    </html>













@endsection
