@extends('layouts.app')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">About Us</h6>
                <form action="{{ route('about-us.update',['about_u' => $aboutUs->id]) }}"  method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here"
                            id="floatingTextarea" style="height: 150px;" name="part1">{{ $aboutUs->part1 }}</textarea>
                        <label for="floatingTextarea">About Us Part 1</label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">About Us List 1</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="list1" required value="{{ $aboutUs->list1 }}">

                    </div>
                    <div class="mb-3 mt-2">
                        <label for="exampleInputEmail1" class="form-label">About Us List 2</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="list2" value="{{ $aboutUs->list2 }}">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">About Us List 3</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="list3" value="{{ $aboutUs->list3 }}">

                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here"
                            id="floatingTextarea" style="height: 150px;" name="Part2">{{ $aboutUs->Part2 }}</textarea>
                        <label for="floatingTextarea">About Us Part 1</label>
                    </div>


                    <button  type="submit" class="btn btn-primary mt-2">Submit</button>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
