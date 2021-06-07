@extends('layouts.app')

@section('content')
    <div data-spy="scroll" data-offset="5">
        <a id="scrollBtn" href="#menu" style="color: white" title="Back to top of menu">&uarr;</a>

        <!-- start banner Area -->
        <section id="top" class="top-header">
            <div class="container width-700">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-12 banner-content">
                        <h3 class="text-white">
                            Welkom bij Het Stokbroodje. Als restaurant streven wij voor klantvriendelijkheid, gastvrijheid en geweldige recepten. Wees welkom in ons gezellige restaurant en geniet van onze vele gerechten.
                        </h3>
                        <a href="#menu" class="primary-btn center"><b>&darr;</b>&nbsp;&nbsp;Bekijk onze Gerechten&nbsp;&nbsp;<b>&darr;</b></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End banner Area -->

        <!-- Start menu-area Area -->
        <section class="menu-area">
            <div id="menu" class="container">
                <div class="row d-flex justify-content-center pt-4">
                    <div class="menu-content pb-10 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Wat wij serveren</h1>
                            <p><i>Uiteraard Met Passie!</i></p>
                        </div>
                    </div>
                </div>

                <ul class="filter-wrap filters col-lg-12 no-padding">
                    <li class="active" data-filter="*">Alles</li>
                    @foreach($categories as $category)
                        <li data-filter=".cat_{{$category->id}}">{{$category->name}}</li>
                    @endforeach
                </ul>

                <div class="filters-content">
                    <div class="row grid">

                        @foreach($categories as $category)
                        <div class="col-md-6 all cat_{{$category->id}}">

                            <h2 style="text-align: center; margin-top: 20px">== {{$category->name}} ==</h2>

                            @foreach($products as $product)
                                @if ($product->category_id == $category->id)
                                <div class="card" style="margin-top: 10px;">
                                    <div class="card-body">
                                        <div class="title-wrap d-flex justify-content-between">
                                            <h5>{{$product->name}}</h5>
                                            <h4 class="price">€{{$product->price}}</h4>
                                        </div>
                                        <p style="margin: 0px; font-size: 75%">
                                            {{$product->description}}
                                        </p>
                                    </div>
                                </div>
                                @endif
                            @endforeach

                        </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </section>
        <!-- End menu-area Area -->
    </div>
@endsection
