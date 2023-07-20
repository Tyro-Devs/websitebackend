
@extends('layouts.app')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Portfolios</h6>
                <form method="POST" action="{{ route('portfolio.update', $portfolio->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Title</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="title" required value="{{ $portfolio->title }}">

                    </div>
                    <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" required name="type_id">
                        <option selected="">Select Type</option>
                        @foreach ($types as $type)
                        @if($type->id == $portfolio->type_id)
                        <option value="{{ $type->id }}" selected>{{ $type->name }}</option>
                        @else
                        @endif
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach


                    </select>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Client Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="client" required value="{{ $portfolio->client }}">

                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Live Link</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="live_link" value="{{ $portfolio->live_link }}">

                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label"> Image</label>
                        <input class="form-control" type="file" id="formFile" name="image">
                        <img src="{{ asset($portfolio->image) }}" alt="" class="mt-2" style="height: 100px; width:150px">
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here"
                            id="floatingTextarea" style="height: 150px;" name="desc">{{ $portfolio->desc }}</textarea>
                        <label for="floatingTextarea">Description</label>
                    </div>



                    <button  type="submit" class="btn btn-primary mt-2">Submit</button>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
