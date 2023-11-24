<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice</title>
    <!-- Google Font -->
    @include('Layout.include.googlefont')
    <!-- bootstrap stylesheet -->
    @include('Layout.include.bootstrapstyle')
    <!-- custom styles -->

    @include('Layout.include.fontawsome')
    @include('Layout.include.customcss')
</head>
<header>
  @include('Layout.include.navbar')
    <section class="container-fluid hero-section pt-2 pb-3">
        <section class="container">
            <div class="row d-flex  align-items-center">
                <div class="col-lg-6">
                    <p class="hero-font-very-small fw-light pt-2">
                        CBR stands for city bike racing. if you remember the old honda</p>
                    <h1 class=" hero-font-big">Honda CBR 300R</h1>
                    <p class="fw-light hero-font-small">Registered. Honda has announced that all motorcycle production
                        in its
                        Marysville plant is to be
                        moved to Japan, marking the end of almost thirty years of Goldwing production in the plant.</p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn purchase" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
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
                    <img class="img-fluid" src="images/header-bike.png" alt="">


                </div>
            </div>
        </section>

    </section>

</header>
<!-- FEATURED BIKE -->
<main>
    <section class="container-fluid featured-bike">
        <section class="container pt-5">
            <h1 class="text-center py-5">Featured Bikes 2021</h1>
            <p class="fw-bold text-center">Best bike collection</p>

            <div class="row gx-5">
                <div class="col-lg-4 honda-grey-scale">
                    <div class="p-3 ">
                        <img class="img-fluid" src="{{asset('images/feature-bike.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-4 honda">
                    <div class="p-3 ">
                        <img class="img-fluid" src="{{asset('images/feature-bike.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-4 honda-grey-scale">
                    <div class="p-3 ">
                        <img class="img-fluid" src="{{asset('images/feature-bike.jpg')}}" alt="">
                    </div>
                </div>
            </div>

        </section>
    </section>
    <!-- LATEST NEWS START -->
    <section class="container-fluid latestt-news pt-5">
        <section class="container">

            <h1 class="py-5 text-center">Latest News</h1>

            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-lg-4 latest-news me-2 mb-2">
                    <div>
                        <img class="img-fluid" src="{{asset('images/bike-3.png')}}" alt="">
                    </div>
                    <h5 class="py-3">Bike News BD</h5>
                    <p class="">
                        To find out all the authentic news about motorcycle industrial activities and motorcycle
                        pricerelated news Motorcycle valley brings in “News Page “section for the users.
                    </p>
                    <div>
                        <button class="btn read-more">Read More</button>
                    </div>

                </div>
                <div class="col-lg-4 latest-news me-2 mb-2">
                    <div>
                        <img class="img-fluid" src="{{asset('images/bike-2.png')}}" alt="">
                    </div>
                    <h5 class="py-3">Bike News BD</h5>
                    <p class="">
                        To find out all the authentic news about motorcycle industrial activities and motorcycle
                        pricerelated news Motorcycle valley brings in “News Page “section for the users.
                    </p>
                    <div>
                        <button class="btn btn-outline-warning button-outline">Read More</button>
                    </div>

                </div>
                <div class="col-lg-4 latest-news me-2 mb-2">
                    <div>
                        <img class=" img-fluid" src="images/bike-1.png" alt="">
                    </div>
                    <h5 class="py-3">Bike News BD</h5>
                    <p class="text-primary">
                        To find out all the authentic news about motorcycle industrial activities and motorcycle
                        pricerelated news Motorcycle valley brings in “News Page “section for the users.
                    </p>
                    <div>
                        <button class="btn btn-outline-warning button-outline">Read More</button>
                    </div>

                </div>



            </div>


        </section>

    </section>


    <!-- HAPPY CLIENTS -->
    <section class="container-fluid happy-clients">
        <section class="continer text-center pt-5">
            <h1 class="py-5">Happy <span style="color:#E76F51;">Clients says</span></h1>
            <div class="row align-items-center justify-content-center pb-5">
                <div class="col-lg-4 me-3 mb-3 box">

                    <img class="img-fluid rounded mx-auto" src="{{asset('images/user-1.png')}}" class="card-img-top" alt="...">


                    <p>
                        A businessperson (also businessman or businesswoman) is someone who works at a job that focuses
                        on making money. Very broadly it can mean anyone who works in industry or commerce.
                    </p>

                    <p>
                        <i class="fas fa-star" style="color:#E76F51;"></i>
                        <i class="fas fa-star" style="color:#E76F51;"></i>
                        <i class="fas fa-star" style="color:#E76F51;"></i>
                        <i class="fas fa-star" style="color:#E76F51;"></i>
                        <i class="far fa-star" style="color:#E76F51;"></i>
                    </p>
                    <p class="text-info">Tom Carry</p>
                    <p>Banker</p>

                </div>
                <div class="col-lg-4 me-3 mb-3 box">

                    <img class="img-fluid rounded-circle mx-auto " src="{{asset('images/jim.jpg')}}" class="card-img-top" alt="...">


                    <p> A businessperson (also businessman or businesswoman) is someone who works at a job that focuses
                        on making money. Very broadly it can mean anyone who works in industry or commerce.</p>

                    <p>
                        <i class="fas fa-star" style="color:#E76F51;"></i>
                        <i class="fas fa-star" style="color:#E76F51;"></i>
                        <i class="fas fa-star" style="color:#E76F51;"></i>
                        <i class="fas fa-star" style="color:#E76F51;"></i>
                        <i class="far fa-star" style="color:#E76F51;"></i>
                    </p>
                    <p class="text-info">Jim Carry</p>
                    <p>Actor</p>
                </div>

                <div class="col-lg-4 me-3 mb-3 box">

                    <img class="img-fluid rounded-circle mx-auto " src="{{asset('images/sil.jpg')}}" class="card-img-top" alt="...">


                    <p> A businessperson (also businessman or businesswoman) is someone who works at a job that focuses
                        on making money. Very broadly it can mean anyone who works in industry or commerce.</p>

                    <p>
                        <i class="fas fa-star" style="color:#E76F51;"></i>
                        <i class="fas fa-star" style="color:#E76F51;"></i>
                        <i class="fas fa-star" style="color:#E76F51;"></i>
                        <i class="fas fa-star" style="color:#E76F51;"></i>
                        <i class="far fa-star" style="color:#E76F51;"></i>
                    </p>
                    <p class="text-info">Silvaster Stalon</p>
                    <p>Progmaer</p>
                </div>

            </div>

        </section>
    </section>

    <!-- FREQUENTLY ASKED QUESTION -->
    <section class="container-fluid">
        <section class="container pt-5">
            <h1 class="py-5 text-center" style="color:#0D0925;">Frequently Asked <span
                    style="color:#E76F51;">Questions</span></h1>

            <div class="row pb-5">
                <div class="col-md-6 accordion-img mb-3">
                    <img class="img-fluid" src="{{asset('images/accor.jpg')}}" alt="">

                </div>
                <div class="col-md-6 mb-3">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Need to know about the best bike brands
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>With so many different
                                        types of bikes and brands</strong> available nowadays, all the information can
                                    be
                                    overwhelming, leaving you feeling confused and unsure where to start. Whether you
                                    want to buy a road, mountain, or hybrid bike, we’ve created a list of the best bike
                                    brands so you can shop for your new bike with confidence.
                                    Ancheer is a cheap electric bike brand. They have a great selection of budget eBikes
                                    from $300 to $1,000+. Folding mountain bikes, mini eBikes, and much more.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What may be the price for 2020 Honda CBR300R
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    <strong>Well, the 2020 Honda CBR300R</strong> is a small-displacement sportbike that
                                    touches on all
                                    counts. 1) It only costs a base MSRP of $4,699.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Which Bike Color seems Good
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    yellow. Votes: 3 2.4%
                                    orange. Votes: 8 6.4%
                                    red. Votes: 32 25.6%
                                    green. Votes: 3 2.4%
                                    blue. Votes: 25 20.0%
                                    purple. Votes: 1 0.8%
                                    silver/grey. Votes: 13 10.4%
                                    black. Votes: 33 26.4%
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Do You Want to Attend in honda racing
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Yes I want to attend on Honda Racing</strong> For this purpose I expect
                                    desolate wide road
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>
    </section>

    <!-- WHY YOY WILL LOVE THIS BRAND -->
    <section class="container-fluid py-5 why-love" style="background-color: rgb(255, 255, 255);">
        <section class="container ">
            <h1 class="py-5 text-center">WHY YOU WILL<span class="text-muted"> LOVE THIS BRAND</span> </h1>
            <div class="row d-flex mb-5">
                <div class="col-lg-6">
                    <div class="row d-flex gy-2">
                        <div class="card col-lg-5 me-2">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Sportbike Design </h5>
                                <p class="card-text">If you’ve got a soft spot for sportbike design and Grand Prix
                                    stylings.Then the 2021 Honda CBR300R is your sweet spot between form and function.

                                </p>
                                <a href="#" class="btn btn-primary">Read more</a>
                            </div>
                        </div>

                        <div class="card col-lg-5 me-2">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Grand Prix stylings </h5>
                                <p class="card-text">If you’ve got a soft spot for sportbike design and Grand Prix
                                    stylings.Then the 2021 Honda CBR300R is your sweet spot between form and function.

                                </p>
                                <a href="#" class="btn btn-primary">Read more</a>
                            </div>
                        </div>

                        <div class="card col-lg-5 me-2">
                            <div class="card-body">
                                <h5 class="card-title text-primary"> Single-cylinder Engine </h5>
                                <p class="card-text">The single-cylinder engine offers great fuel economy

                                </p>
                                <a href="#" class="btn btn-primary">Read more</a>
                            </div>
                        </div>

                        <div class="card col-lg-5 me-2">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Affordable Cost </h5>
                                <p class="card-text">And the affordable cost and responsive handling makes it a terrific
                                    bike for first-time riders

                                </p>
                                <a href="#" class="btn btn-primary">Read more</a>
                            </div>
                        </div>





                    </div>

                </div>



                <div class="col-lg-6 p-2">

                    <img class="img-fluid rounded" src="images/cbbb.jpg" class="card-img-top" alt="HONDA CBR">

                </div>
            </div>






        </section>

    </section>

    <section class="container-fluid more-info">
        <section class="container">
            <h1 class="text-center text-warning py-5">More Information</h1>
            <div class="row g-4 pb-5">
                <div class="col-lg-4">
                    <div class="more-info-box">
                        <i class="fas fa-cogs mb-1 fs-1" style=" color: #E76F51;"></i>
                        <h5>Technical Support</h5>
                        <p>
                            Yes, we may try to provide provide tecnical support, if you face any problem, then knock us
                            to our hot line.

                        </p>
                        <p class="text-primary">Read More</p>
                    </div>

                </div>
                <div class="col-lg-4 ">
                    <div class="more-info-box ">
                        <i class="fab fa-guilded mb-1 fs-1" style=" color: #E76F51;"></i>

                        <h5>5 Year Warranty</h5>
                        <p>
                            After purchase, we may give you five years warranty. Just come to our office with necessary
                            documents.
                        </p>
                        <p class=" text-primary">Read More</p>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="more-info-box">
                        <i class="fas fa-money-check-alt mb-1 fs-1" style=" color: #E76F51;"></i>
                        <h5>Easy Refund Policy</h5>
                        <p>
                            We may provide easy refund policy, so there may low risk. So you can contact with us by
                            online or offline.

                        </p>
                        <p class="text-primary">Read More</p>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="more-info-box">
                        <i class="fas fa-concierge-bell mb-1 fs-1" style=" color: #E76F51;"></i>
                        <h5>Live Support</h5>
                        <p>
                            if you face any technical problem, then no need to delay, we may try to give you live
                            support by online device
                        </p>
                        <p class="text-primary">Read More</p>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class="more-info-box">
                        <i class="fab fa-accusoft mb-1 fs-1" style=" color: #E76F51;"></i>
                        <h5>Excellent Features</h5>
                        <p>
                            Our new models comes with new features, hope you may enjoy our featuresm some features may
                            look your bike beautiful
                        </p>
                        <p class="text-primary">Read More</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="more-info-box ">
                        <i class="fas fa-globe  mb-1 fs-1" style=" color: #E76F51;"></i>
                        <h5>Good Support Team</h5>
                        <p>
                            A good support team may provide you best support, so why you will make late, you can contact
                            with our skilled team
                        </p>
                        <p class="text-primary">Read More</p>
                    </div>

                </div>

            </div>


        </section>

    </section>


</main>

<!-- FOOTER SECTION -->

@include('Layout.include.footer')


<body>

    <!-- bootstrap Script -->
 @include('Layout.include.bootstrapscript')
</body>

</html>
