
@extends('layouts.app')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Portfolios</h6>
                <form method="POST" action="{{ route('portfolio.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Title</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="title" required>

                    </div>
                    <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" required name="type_id">
                        <option selected="">Select Type</option>
                        @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach


                    </select>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Client Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="client" required>

                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Live Link</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="live_link">

                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label"> Image</label>
                        <input class="form-control" type="file" id="formFile" name="image">
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here"
                            id="floatingTextarea" style="height: 150px;" name="desc"></textarea>
                        <label for="floatingTextarea">Description</label>
                    </div>



                    <button  type="submit" class="btn btn-primary mt-2">Submit</button>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
