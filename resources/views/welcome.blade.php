@extends('layouts.default')

@section('content')

<main style="overflow: hidden;">
    <section style="overflow: hidden;">
        <div class="container-fluid px-0">
            <div id="headerCarousel" class="carousel slide" data-bs-ride="carousel">
                <!-- Carousel Slides -->
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="carousel-slide">
                            <img src="{{asset('images/slider2.webp')}}" class="w-100">
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="carousel-slide">
                            <img src="{{asset('images/slider1.webp')}}" class="w-100">
                        </div>
                    </div>
                </div>
                <!-- Controls -->
                <a class="carousel-control-prev" href="#headerCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#headerCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
        <marquee class="text-white h5" style="background: #015ca4; padding:18px 0px">
            Variety of flavours from american cuisine
        </marquee>
    </section>
    <section>
        <div class="container">
            <div class="row g-2">
                @foreach($restaurants as $restaurant)
                <div class="col-12 col-sm-6 col-md-4 mb-3 mb-lg-2">
                    <a href="{{route('restaurent.menu', [$restaurant->id])}}">
                        <div class="curriculum-card">
                            <img class="rounded" src="{{$restaurant->image}}" alt="{{$restaurant->name}}" style="width: 100%;">
                            <div class="curriculum-card-body pt-2">
                                <h5 class="curriculum-card-title">{{$restaurant->name}}</h5>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section>
        <div class="hero-section1 mt-4"
            style="background: url('images/Building7.webp') center/cover no-repeat">
            <div class="" style="background: #00000085;padding:5% 0px">
                <div class="container text-center">
                    <h4 class="display-3 fw-bold text-white font-weight-bold"></h4>
                    <p class="mb-4 display-9 fw-600 text-white h4" style="line-height: 1.3em;">
                        The School Session is in accordance with Central Board of Secondary Education (C.B.S.E.), New Delhi which is from April to March every year.
                    </p>
                    <a href="{{url('contact')}}" class="btn btn-primary btn-lg fw-bold">GET ADMISSION</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Certificates -->
</main>

@endsection