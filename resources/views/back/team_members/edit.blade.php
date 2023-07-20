
@extends('layouts.app')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Team Members</h6>
                <form method="POST" action="{{ route('team-member.update', $teamMember->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="name" required value="{{ $teamMember->name }}">

                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Image</label>
                        <input class="form-control" type="file" id="formFile" name="image">
                        <img src="{{ asset($teamMember->image) }}" alt="" class="mt-2" style="height: 100px; width:150px">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Designation</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="designation" required value="{{ $teamMember->designation }}">

                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Facebook Link</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="fb_link" value="{{ $teamMember->fb_link }}">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Insta Link</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="insta_link" value="{{ $teamMember->insta_link }}">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Linkdin Link</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="linkedin_link" value="{{ $teamMember->linkedin_link }}">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Portfolio Link</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="linkedin_link" value="{{ $teamMember->linkedin_link }}">

                    </div>

                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here"
                            id="floatingTextarea" style="height: 150px;" name="member_desc">{{ $teamMember->member_desc }}</textarea>
                        <label for="floatingTextarea">Member Desc</label>
                    </div>

                    <select class="form-select form-select-sm mb-3 mt-2" aria-label=".form-select-sm example" required name="type_id">
                        <option selected="">Select</option>
                        @if ($teamMember->is_active == 1)
                        <option value="1" selected>Inactive</option>
                        @else
                        <option value="0" selected>Active</option>
                        @endif
                        <option value="0">Active</option>
                        <option value="1">Inactive</option>


                    </select>

                    <button  type="submit" class="btn btn-primary mt-2">Submit</button>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
