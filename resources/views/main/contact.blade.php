@extends('layouts.app')

@section('content')

    <!-- start banner Area -->
    <div id="main-auth">
        <section>
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-12 banner-content">
                        <h1 class="text-white text-center">
                            Contact
                        </h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-4">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-12">
                        <h2 class="text-white text-center">
                            HEEFT U EEN VRAAG?
                        </h2>
                    </div>
                </div>
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-12">
                        <p class="text-white text-center" style="font-size: 125%">
                            Voor al uw vragen over onze menukaart of catering kunt u contact<br>opnemen door onderstaand formulier in te vullen.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <h3 class="text-danger">Adresgegevens</h3>
                        <p class="text-white my-0">{{$address->name}}</p>
                        <p class="text-white my-0">{{$address->address}}</p>
                        <p class="text-white my-0">{{$address->zipcode}}, {{$address->city}}</p>
                        <p class="text-white my-0">
                            T.&nbsp;<a href="tel:{{$address->phone}}" class="text-white my-0">{{$address->phone}}</a>
                        </p>
                        <p class="text-white my-0">
                            E.&nbsp;<a href="mailto:{{$address->email}}" class="text-white my-0">{{$address->email}}</a>
                        </p>
                    </div>
                    <div class="col-lg-8">
                        <form action="" method="post" action="{{ route('contact.store') }}">

                            @csrf

                            <div class="form-group">
                                <label class="text-white">Naam*</label>
                                <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name">

                                <!-- Error -->
                                @if ($errors->has('name'))
                                    <div class="error">
                                        {{ $errors->first('name') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-white">Email*</label>
                                <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">

                                @if ($errors->has('email'))
                                    <div class="error">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-white">Telefoon*</label>
                                <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone">

                                @if ($errors->has('phone'))
                                    <div class="error">
                                        {{ $errors->first('phone') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-white">Onderwerp*</label>
                                <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject" id="subject">

                                @if ($errors->has('subject'))
                                    <div class="error">
                                        {{ $errors->first('subject') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="text-white">Bericht*</label>
                                <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message" rows="4"></textarea>

                                @if ($errors->has('message'))
                                    <div class="error">
                                        {{ $errors->first('message') }}
                                    </div>
                                @endif
                            </div>

                            <input type="submit" name="send" value="Submit" class="btn btn-danger btn-block">
                        </form>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!-- End banner Area -->
@endsection
