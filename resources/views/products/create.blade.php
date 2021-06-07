@extends('layouts.admin')

@section('content')

    <section class="my-4">
        <div class="container">

            <div class="card">
                <div class="card-header">
                    <b>Product Toevoegen</b>
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
                            <label for="Title" class="col-sm-2 col-form-label">Bijschrift</label>
                            <div class="col-sm-10">
                                <input type="Caption" class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}"
                                       placeholder="Bijschrift" name="caption" id="CaptionInput">
                                <span class="text-danger" id="CaptionInputError">
                                    @if($errors->has('caption'))
                                        {{ $errors->first('caption') }}
                                    @endif
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Description" class="col-sm-2 col-form-label">Beschrijving</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                       placeholder="Beschrijving" name="description" id="DescriptionInput">
                                <span class="text-danger" id="DescriptionInputError">
                                    @if($errors->has('description'))
                                        {{ $errors->first('description') }}
                                    @endif
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Price" class="col-sm-2 col-form-label">Prijs</label>
                            <div class="col-sm-10">
                                <input type="text" step=".05" pattern="^\d+(?:\.\d{1,2})?$"
                                       class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" placeholder="Prijs"
                                       name="price" id="PriceInput">
                                <span class="text-danger" id="PriceInputError">
                                    @if($errors->has('price'))
                                        {{ $errors->first('price') }}
                                    @endif
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Category" class="col-sm-2 col-form-label">Categorie</label>
                            <div class="col-sm-10">
                                <select class="form-select-lg w-100" name="category" aria-label="Default select example" id="CategoryInput">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
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
