@extends('layouts.app')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Portfolios</h6>
                <form method="POST" action="{{ route('footer.update', $footer->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Fb Link</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="fb_link" required value="{{ $footer->fb_link }}">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Insta Link</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="insta_link" required value="{{ $footer->insta_link }}">

                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Linkdin Link</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="linkedin_link" value="{{ $footer->linkedin_link }}">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Codecan Link</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="codecanyon_link" value="{{ $footer->codecanyon_link }}">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Skype Link</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="skype_link" value="{{ $footer->skype_link }}">

                    </div>

                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here"
                            id="floatingTextarea" style="height: 150px;" name="about">{{ $footer->about }}</textarea>
                        <label for="floatingTextarea">about</label>
                    </div>



                    <button  type="submit" class="btn btn-primary mt-2">Submit</button>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
