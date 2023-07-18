@extends('layouts.app')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Top Section</h6>
                <form method="POST" action="{{ route('top-sections.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Top Heading</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="top_heading" required>

                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here"
                            id="floatingTextarea" style="height: 150px;" name="top_about"></textarea>
                        <label for="floatingTextarea">Top Section About</label>
                    </div>
                    <div class="mb-3 mt-2">
                        <label for="exampleInputEmail1" class="form-label">Top Link</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="top_link">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Top Video Link</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="top_video_link">

                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here"
                            id="floatingTextarea" style="height: 150px;" name="team_desc"></textarea>
                        <label for="floatingTextarea">Team Description</label>
                    </div>


                    <button  type="submit" class="btn btn-primary mt-2">Submit</button>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
