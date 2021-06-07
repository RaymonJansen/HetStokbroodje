@extends('layouts.admin')

@section('content')

    <section class="my-4">
        <div class="container">

            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <b>Contact Informatie Aanpassen</b>
                </div>
                <div class="card-body">
                    {!! Form::model($information, [
                        'method' => 'POST',
                        'route' => ['information.update']
                    ]) !!}

                    <div class="form-group row">
                        {!! Form::label('name', 'Naam:', ['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        {!! Form::label('detailed_text', 'Gedetaileerde Tekst:', ['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('detailed_text', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        {!! Form::label('address', 'Adres:', ['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('address', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        {!! Form::label('zipcode', 'Postcode:', ['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('zipcode', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        {!! Form::label('city', 'Plaats:', ['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('city', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        {!! Form::label('email', 'Email:', ['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('email', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        {!! Form::label('phone', 'Telefoon:', ['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-3">
                            <a class="btn btn-danger btn-block" href="{{ route('admin.home') }}">Terug</a>
                        </div>
                        <div class="col-sm-6">

                        </div>
                        <div class="col-sm-3">
                            {!! Form::submit('Informatie Bijwerken', ['class' => 'btn btn-success btn-block']) !!}
                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>

        </div>
    </section>

@endsection()
