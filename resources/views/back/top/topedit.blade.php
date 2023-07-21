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
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Top Section</h6>
                <form action="{{ route('top-sections.update', ['top_section' => $topSection->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Top Heading</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="top_heading" required value="{{ $topSection->top_heading }}">

                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here"
                            id="floatingTextarea" style="height: 150px;" name="top_about">{{ $topSection->top_about }}</textarea>
                        <label for="floatingTextarea">Top Section About</label>
                    </div>
                    <div class="mb-3 mt-2">
                        <label for="exampleInputEmail1" class="form-label">Top Link</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="top_link" value="{{ $topSection->top_link }}">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Top Video Link</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="top_video_link" value="{{ $topSection->top_video_link }}">

                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here"
                            id="floatingTextarea" style="height: 150px;" name="team_desc">{{ $topSection->team_desc }}</textarea>
                        <label for="floatingTextarea">Team Description</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here"
                            id="floatingTextarea" style="height: 150px;" name="port_desc">{{ $topSection->port_desc }}</textarea>
                        <label for="floatingTextarea">Portfolio Description</label>
                    </div>

                    <button  type="submit" class="btn btn-primary mt-2">Submit</button>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
