@extends('layouts.admin_layout')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">abouts List </h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"> abouts List</li>
            </ol>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col"> #</th>
                        <th scope="col">Title 1</th>
                        <th scope="col">Title 2</th>
                        <th scope="col"> Image</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($abouts) > 0)
                        @foreach ($abouts as $about)
                            <tr scope="row">
                                <td>{{ $about->id }} </td>
                                <td>{{ $about->title1 }} </td>
                                <td> {{ $about->title2 }} </td>
                                <td>
                                    <img style="width: 100px;" src="{{ url($about->image) }}" alt="">
                                </td>
                                <td> {{Str::limit(strip_tags($about->description), 40)}} </td>
                                <td class="row">
                                    <div class="col-sm-6">
                                        <a href="{{ route('admin.abouts.edit', $about->id) }}" class="btn btn-primary">Edit</a>
                                    </div>
                                    <div class="col-sm-6">
                                        <form action="{{ route('admin.abouts.destroy', $about->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                          <input type="submit" name="submit" value="Delete" class="btn btn-danger" >
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>

        </div>
    </main>
@endsection
