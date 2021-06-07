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
                    <b>Categorie Aanpassen</b>
                </div>
                <div class="card-body">
                    {!! Form::model($category, [
                        'method' => 'POST',
                        'route' => ['category.update', $category->id]
                    ]) !!}

                    <div class="form-group row">
                        {!! Form::label('name', 'Naam:', ['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-3">
                            <a class="btn btn-danger btn-block" href="{{ route('admin.home') }}">Terug</a>
                        </div>
                        <div class="col-sm-6">

                        </div>
                        <div class="col-sm-3">
                            {!! Form::submit('Categorie Bijwerken', ['class' => 'btn btn-success btn-block']) !!}
                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>

        </div>
    </section>

@endsection()
