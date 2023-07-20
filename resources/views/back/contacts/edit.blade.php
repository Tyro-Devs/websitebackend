
@extends('layouts.app')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Contact</h6>
                <form method="POST" action="{{ route('contact.update', $contact->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Title</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="title" required value="{{ $contact->title }}">

                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Address</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="address" required value="{{ $contact->address }}">

                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="email" value="{{ $contact->email }}">

                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label"> Phone</label>
                        <input class="form-control" type="text" id="formFile" name="phone" required value="{{ $contact->phone }}">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Map</label>
                        <input class="form-control" type="text" id="formFile" name="map" value="{{ $contact->map }}">
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here"
                            id="floatingTextarea" style="height: 150px;" name="desc">{{ $contact->desc }}</textarea>
                        <label for="floatingTextarea">Description</label>
                    </div>



                    <button  type="submit" class="btn btn-primary mt-2">Submit</button>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
