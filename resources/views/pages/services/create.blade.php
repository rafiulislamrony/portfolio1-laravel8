@extends('layouts.admin_layout')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Services Create </h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"> Services Create</li>
            </ol> 
            <form action="{{ route('admin.services.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-4 mt-3">
                        <div class="mb-3">
                            <label for="icon">
                                <h4>Font Awesome Icon</h4>
                            </label>
                            <input type="text" class="form-control" id="icon" name="icon">
                        </div>
                        <div class="mb-4">
                            <label for="title">
                                <h4>Title</h4>
                            </label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div>
                            <label class="d-block" for="description">
                                <h4>Description</h4>
                            </label>
                            <textarea style="width: 100%;" name="description" id="description" cols="30" rows="10"> </textarea>
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary mt-5">
            </form>
         </div>
    </main>
@endsection
