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
                        <th scope="col">Icon</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($services) > 0)
                        @foreach ($services as $service)
                            <tr scope="row">
                                <td>{{ $service->id }} </td>
                                <td>{{ $service->icon }} </td>
                                <td> {{ $service->title }} </td>
                                <td> {{Str::limit(strip_tags($service->description), 40)}} </td>
                                <td class="row">
                                    <div class="col-sm-6">
                                        <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-primary">Edit</a>
                                    </div>
                                    <div class="col-sm-6">
                                        <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST">
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
