@extends('layouts.app')

@section('content')
@if (session('success'))
<div class="alert alert-primary alert-dismissible fade show mt-2" role="alert">
    <i class="fa fa-exclamation-circle me-2"></i>{{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif
<div class="container-fluid pt-4 px-4">
<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">About Us <a href="{{ route('about-us.create') }}" class="btn btn-success rounded-pill m-2">Add</a></h6>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Part 1</th>
                            <th scope="col">Part 2</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($aboutUs as $data )
                        <tr>
                            <th scope="row">{{ $data->id }}</th>
                            <td>{{ $data->part1 }}</td>
                            <td> {{ $data->Part2 }}</td>
                            <td><a class="btn btn-danger rounded-pill m-2">Delete</a>
                                <a href="{{ route('about-us.edit', $data->id) }}" class="btn btn-info rounded-pill m-2">Edit</a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
