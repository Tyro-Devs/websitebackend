
@extends('layouts.app')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Top Section</h6>
                <form method="POST" action="{{ route('tool.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Tools Image</label>
                        <input class="form-control" type="file" id="formFile" name="image">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Link</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="link">

                    </div>



                    <button  type="submit" class="btn btn-primary mt-2">Submit</button>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
