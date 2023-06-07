@extends('layouts.admin_layout')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Portfolio Edit </h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"> Portfolio Edit</li>
            </ol>
            <form action="{{ route('admin.portfolios.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-3 mt-3">
                        <h3>Big Image</h3>
                        <img src="{{ url($portfolio->big_img) }}" class="img-thumbnail" style="height: 20vh; width: 20vh;" alt="">
                        <input class="mt-3" type="file" name="big_img">
                    </div>
                    <div class="form-group col-md-3 mt-3">
                        <h3>Small Images</h3>
                        <img src="{{ url($portfolio->small_img) }}" class="img-thumbnail" style="height: 20vh; width: 20vh;" alt="">
                        <input class="mt-3" type="file" name="small_img">
                    </div>
                    <div class="form-group col-md-4 mt-3">
                        <div class="mb-3">
                            <label for="title">
                                <h4>Title</h4>
                            </label>
                            <input type="text" class="form-control" name="title" value="{{ $portfolio->title }}">
                        </div>
                        <div class="mb-4">
                            <label for="sub_title">
                                <h4>Subtitle</h4>
                            </label>
                            <input type="text" class="form-control" name="sub_title"  value="{{ $portfolio->sub_title }}">
                        </div>
                    </div>
                    <div class="form-group col-md-6 mt-3">
                        <h3>Description</h3>
                        <textarea  class="form-control" name="description" id="" cols="30" rows="5">{{ $portfolio->description }} </textarea>
                    </div>
                    <div class="form-group col-md-4 mt-3">
                        <div class="mb-3">
                            <label for="client">
                                <h4>Client</h4>
                            </label>
                            <input type="text" class="form-control" name="client"  value="{{ $portfolio->client }}">
                        </div>
                        <div class="mb-4">
                            <label for="category">
                                <h4>Category</h4>
                            </label>
                            <input type="text" class="form-control" name="category" value="{{ $portfolio->category }}">
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary my-5">
            </form>
         </div>
    </main>
@endsection
