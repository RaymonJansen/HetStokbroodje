@extends('layouts.admin')

@section('content')

    <section class="my-4">
        <div class="container">

            <div class="card">
                <div class="card-header">
                    <b>Categorie Toevoegen</b>
                </div>
                <div class="card-body">
                    <form method="POST" action="#" class="container-fluid">
                        @csrf
                        <div class="form-group row">
                            <label for="Name" class="col-sm-2 col-form-label">Naam</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                       placeholder="Naam" name="name" id="NameInput">
                                <span class="text-danger" id="NameInputError">
                            @if($errors->has('name'))
                                        {{ $errors->first('name') }}
                                    @endif
                        </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-3">
                                <a class="btn btn-danger btn-block" href="{{ route('admin.home') }}">Terug</a>
                            </div>
                            <div class="col-sm-6">

                            </div>
                            <div class="col-sm-3">
                                <button class="btn btn-success btn-block" type="submit" id="create_product">Product Toevoegen</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>

@endsection()
