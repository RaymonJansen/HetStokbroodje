@extends('layouts.admin')

@section('content')


    <section class="my-4">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <b>Product Aanpassen</b>
                </div>
                <div class="card-body">

                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                    {!! Form::model($product, [
                        'method' => 'POST',
                        'route' => ['product.update', $product->id]
                    ]) !!}

                    <div class="form-group row">
                        {!! Form::label('name', 'Naam:', ['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        {!! Form::label('caption', 'Bijschrift:', ['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('caption', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        {!! Form::label('description', 'Beschrijving:', ['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('description', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        {!! Form::label('price', 'Prijs:', ['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('price', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        {!! Form::label('category_id', 'Title:', ['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::select('category_id', $categories, $product->category_id, ['class' => 'form-select-lg w-100']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-3">
                            <a class="btn btn-danger btn-block" href="{{ route('admin.home') }}">Terug</a>
                        </div>
                        <div class="col-sm-6">

                        </div>
                        <div class="col-sm-3">
                            {!! Form::submit('Product Bijwerken', ['class' => 'btn btn-success btn-block']) !!}
                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>

@endsection()
