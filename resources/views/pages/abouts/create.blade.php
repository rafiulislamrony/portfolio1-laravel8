@extends('layouts.admin_layout')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Abouts Create</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"> Abouts Create</li>
            </ol>
            <form action="{{ route('admin.abouts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}
                <div class="row">
                    <div class="form-group col-md-3 mt-3">
                        <h3>  Image</h3> 
                        <input class="mt-3" type="file" name="image">
                    </div>
                    <div class="form-group col-md-4 mt-3">
                        <div class="mb-3">
                            <label for="title1">
                                <h4>Title 1</h4>
                            </label>
                            <input type="text" class="form-control" name="title1">
                        </div>
                        <div class="mb-4">
                            <label for="title2">
                                <h4>Title 2</h4>
                            </label>
                            <input type="text" class="form-control" name="title2">
                        </div>
                    </div>
                    <div class="form-group col-md-6 mt-3">
                        <h3>Description</h3>
                        <textarea  class="form-control" name="description" id="" cols="30" rows="5"> </textarea>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary my-5">
            </form>
        </div>
    </main>
@endsection
