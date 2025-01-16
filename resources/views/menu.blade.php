@extends('layouts.default')

@section('content')

<main style="overflow: hidden;">
    <div class="carousel-slide" style="background-image: url({{asset('images/demoimg.webp')}});opacity: 0.8;background-size: cover;width:100%;">
        <div class="h-100" style="background: #00000091; padding:12% 0px 0% 0px;">
            <div class="row h-100 align-items-center px-3">
                <div class="container text-center text-white">
                    <h4 class="display-4 mb-4 font-weight-bold text-white" style="text-shadow: 2px 2px 4px #000000">{{$restaurant->name}}</h4>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row g-0 py-4">
                @foreach($restaurant->menus ?? [] as $menu)
                <div class="col-12 col-sm-6 col-md-6 mb-3 px-1">
                    <div class="curriculum-card mx-1 d-flex align-items-center" style="border:1px solid black;">
                        <img class="rounded p-2" src="{{$menu->image ?? $restaurant->image}}" alt="{{$menu->name}}" style="width: 200px;height: 150px;">
                        <div class="curriculum-card-body pt-2">
                            <h5 class="curriculum-card-title">{{$menu->name}}</h5>
                            <p class="curriculum-card mb-1">{{$menu->description}}</p>
                            <h5 class="curriculum-card">₹{{$menu->price}}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</main>

@endsection