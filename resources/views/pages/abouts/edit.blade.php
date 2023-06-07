@extends('layouts.admin_layout')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">about Edit </h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"> about Edit</li>
            </ol>
            <form action="{{ route('admin.abouts.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-3 mt-3">
                        <h3> Image</h3>
                        <img src="{{ url($about->image) }}" class="img-thumbnail" style="height: 30vh; width: 30vh;" alt="">
                        <input class="mt-3" type="file" name="image">
                    </div>
                    <div class="form-group col-md-4 mt-3">
                        <div class="mb-3">
                            <label for="title1">
                                <h4>Title 1</h4>
                            </label>
                            <input type="text" class="form-control" name="title1" value="{{ $about->title1 }}">
                        </div>
                        <div class="mb-4">
                            <label for="title2">
                                <h4>Title 2</h4>
                            </label>
                            <input type="text" class="form-control" name="title2"  value="{{ $about->title2 }}">
                        </div>
                    </div>
                    <div class="form-group col-md-6 mt-3">
                        <h3>Description</h3>
                        <textarea  class="form-control" name="description" id="" cols="30" rows="5"> {{ $about->description }} </textarea>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary my-5">
            </form>
         </div>
    </main>
@endsection
