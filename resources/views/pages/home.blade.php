@extends('Layout.master')

@section('content')

    {{-- @include('Component.takecare') --}}
    <section class="container-fluid hero-section pt-2 pb-3">
        <section class="container">
            <div class="row d-flex  align-items-center">
                <div class="col-lg-6">
                    <p class="hero-font-very-small fw-light pt-2">
                        Welcome to our targeted data based marketing</p>
                    <h1 class=" hero-font-big">HB Digital Marketing</h1>
                    <p class="fw-light hero-font-small">As a digital marketer, I will to increase your  brand visibility and engagement. Do you expecting SEO, SEM, and social media strategies? Do you expecting website traffic and conversion rates?</p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn purchase mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Purchase
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Down Payment</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h3 class="text-primary font-weight-bold">Used 2016 Honda Sportbike Motorcycle
                                        CBR300</h3>
                                    <p>We offer in-house financing. No credit is required, and most down payments are
                                        between $1000 and $2000.
                                    </p>
                                    <p class="text-success">Please check :
                                        https://www.cycletrader.com/listing/2016-Honda-CBR300-5016953262</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Understood</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 hero-iamge mb-3">
                    <img class="img-fluid" src="{{asset('images/digtal-1.jpg')}}" alt="">


                </div>
            </div>
        </section>

    </section>

    <section class="container-fluid">
        <section class="container pt-5">
            <h1 class="py-5 text-center" style="color:#0D0925;">Introduce Myself <span
                    style="color:#E76F51;">as Digital Marketer</span></h1>

            <div class="row pb-5">
                <div class="col-md-6 accordion-img mb-3">
                    <img class="img-fluid" src="{{asset('images/introduce-1.jpg')}}" alt="">

                </div>
                <div class="col-md-6 mb-3">
                  <p>
                  I am Abdul Wahed, Master of Science in physics. I have couple years experience on digital marketing. No matter what profession you are in, or what service you are good at, you need contacts, if you only have a chamber or an office, it may not be enough. I advise you to enter the digital world. Be very strategic about your business or service. You can take my digital service for your business introduction.
                  </p>
                  <p>
                    Be tactful about it. You can take my digital service for your business introduction. I can provide you various digital services like Facebook Marketing, Google Ad Setup, Linkedin Profile Key Creation, Pinterest Marketing, SEO Based Details Content, Google Tag Manager Setup etc. If you want I can create portfolio site or e-commerce site for you. We hope these services can be helpful in promoting your business or service
                  </p>
                  <p>
                    If you want I can work as a social media manager for you. That's why I will take a flexible salary from you. As a social media manager I will try to collect leads or clients for you. Not only that I will try to write supplementary content for you on various social media. Of course I will try to make these contents SEO optimized.
                  </p>

                </div>

            </div>

        </section>
    </section>

    <section class="container-fluid latestt-news">
        <section class="container">

            <h1 class="py-5 text-center">My Skills</h1>

            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-lg-4 latest-news me-2 mb-2">
                    <div>
                        <img class="img-fluid" src="{{asset('images/facebook-1.jpg')}}" alt="">
                    </div>
                    <h5 class="py-3">Facebook Matkrting</h5>
                    <p class="">
                        As a Facebook marketer, I will try to carate engaging campaigns so that  you may targeted audience. Whether it may driving brand awareness, generating leads. I will also try to advise how much amount per day should you spent for facebook ad.
                    </p>
                    <div>
                        <button class="btn read-more">Book now</button>
                    </div>

                </div>
                <div class="col-lg-4 latest-news me-2 mb-2">
                    <div>
                        <img class="img-fluid" src="{{asset('images/goole-1.jpg')}}" alt="">
                    </div>
                    <h5 class="py-3">Google Ads Set up</h5>
                    <p class="">
                        Navigating the ever-evolving landscape of online advertising, I may be your go-to mid level Google Ads expert. I will try to provide  strategic keywords and also try to advise the approximate google price for that targeting keywords. I will also adise for high price keyword
                    </p>
                    <div>
                        <button class="btn btn-outline-warning button-outline">Book now</button>
                    </div>

                </div>
                <div class="col-lg-4 latest-news me-2 mb-2">
                    <div>
                        <img class=" img-fluid" src="images/content-1.jpg" alt="">
                    </div>
                    <h5 class="py-3">Content Writing</h5>
                    <p class="text-primary">
                        For SEO content writing at first I will make keyword research for you, which are really important for your conten as well as I will advise which keywords are high , low or medium competative. I think will not take too time for taking such kind of operation
                    </p>
                    <div>
                        <button class="btn btn-outline-warning button-outline">Book now</button>
                    </div>

                </div>



            </div>


        </section>

    </section>

@endsection
