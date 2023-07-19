@extends('layouts.app')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">About Us</h6>
                <form action="{{ route('why-us.update',['why_u' => $whyUs->id]) }}"  method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Title</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="title" required value="{{ $whyUs->title }}">

                    </div>

                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here"
                            id="floatingTextarea" style="height: 150px;" name="why_us_about">{{ $whyUs->why_us_about }}</textarea>
                        <label for="floatingTextarea">About Us Part 1</label>
                    </div>


                    <button  type="submit" class="btn btn-primary mt-2">Submit</button>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
