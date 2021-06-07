@extends('layouts.admin')

@section('content')

    <section class="my-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="pull-left">
                                <b><p class="my-0">Producten</p></b>
                            </div>
                            <div class="pull-right">
                                <p class="text-right my-0"><a href="{{ url('/admin/product/create') }}" title="Product Toevoegen">Toevoegen</a></p>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <td class="text-center">#</td>
                                    <td>Naam</td>
                                    <td class="text-center">Prijs</td>
                                    <td class="text-center">Categorie</td>
                                    <td></td>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($products as $product)
                                    <tr>
                                        <td class="text-center">{{$product->id}}</td>
                                        <td>{{$product->name}}</td>
                                        <td class="text-center">&euro;{{$product->price}}</td>
                                        <td class="text-center">{{$product->category->name}}</td>
                                        <td class="text-center">
                                            <a href="{{ route('product.edit', $product->id) }}" title="Product Aanpassen">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            {{ Form::open(array('url' => 'admin/product/' . $product->id)) }}
                                                {{ Form::hidden('_method', 'DELETE') }}
                                                {{ Form::submit("Delete", array()) }}
                                            {{ Form::close() }}
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="pull-left">
                                <b><p class="my-0">Categorien</p></b>
                            </div>
                            <div class="pull-right">
                                <p class="text-right my-0"><a href="{{ url('/admin/category/create') }}" title="Categorie Toevoegen">Toevoegen</a></p>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <td class="text-center">#</td>
                                    <td>Naam</td>
                                    <td></td>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($categories as $category)
                                    <tr>
                                        <td class="text-center">{{$category->id}}</td>
                                        <td>{{$category->name}}</td>
                                        <td class="text-center">
                                            <a href="{{ route('category.edit', $category->id) }}" title="Categorie Aanpassen">
                                                <i class="fa fa-edit"></i>
                                            </a>
{{--                                            {{ Form::open(array('url' => 'admin/category/' . $category->id)) }}--}}
{{--                                                {{ Form::hidden('_method', 'DELETE') }}--}}
{{--                                                {{ Form::submit("Delete", array()) }}--}}
{{--                                            {{ Form::close() }}--}}
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card my-4">
                        <div class="card-header">
                            <div class="pull-left">
                                <b><p class="my-0">Contact Details</p></b>
                            </div>
                            <div class="pull-right">
                                <p class="text-right my-0"><a href="{{ url('/admin/information/edit') }}" title="Contact Informatie Aanpassen">Aanpassen</a></p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="my-0">{{$address->name}}</p>
                            <p class="my-0">{{$address->detailed_text}}</p>
                            <p class="my-0">{{$address->address}}</p>
                            <p class="my-0">{{$address->zipcode}}, {{$address->city}}</p>
                            <p class="my-0">
                                T.&nbsp;<a href="tel:{{$address->phone}}" class="my-0">{{$address->phone}}</a>
                            </p>
                            <p class="my-0">
                                E.&nbsp;<a href="mailto:{{$address->email}}" class="my-0">{{$address->email}}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
