@extends('layouts.admin_layout')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Services List </h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"> Services List</li>
            </ol>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col"> #</th>
                        <th scope="col">Title</th>
                        <th scope="col">Sub-itle</th>
                        <th scope="col">Big Image</th>
                        <th scope="col">Small Image</th>
                        <th scope="col">Description</th>
                        <th scope="col">Client</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($portfolios) > 0)
                        @foreach ($portfolios as $portfolio)
                            <tr scope="row">
                                <td>{{ $portfolio->id }} </td>
                                <td>{{ $portfolio->title }} </td>
                                <td> {{ $portfolio->sub_title }} </td>
                                <td>
                                    <img style="width: 100px;" src="{{ url($portfolio->big_img) }}" alt="">
                                </td>
                                <td>
                                    <img style="width: 100px;" src="{{ url($portfolio->small_img) }}" alt="">
                                </td>
                                <td> {{Str::limit(strip_tags($portfolio->description), 40)}} </td>
                                <td>{{ $portfolio->client }} </td>
                                <td>{{ $portfolio->category }} </td>
                                <td class="row">
                                    <div class="col-sm-6">
                                        <a href="{{ route('admin.portfolios.edit', $portfolio->id) }}" class="btn btn-primary">Edit</a>
                                    </div>
                                    <div class="col-sm-6">
                                        <form action="{{ route('admin.portfolios.destroy', $portfolio->id) }}" method="POST">
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
