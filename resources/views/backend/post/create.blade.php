@extends('backend.layout.master')
@section('content')
    <div class="container mt-5">
        <h1 class="text-center text-primary">Create Post</h1>
        <form action="{{route('post.store')}}" method="POST">
            @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title" required>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" placeholder="Enter Description" rows="3" required></textarea>
      </div>
      <div class="mb-3">
        <input class="form-check-input mt-0" type="checkbox" name="is_active" id="is_active"  aria-label="Checkbox for following text input">
        <label for="is_active" class="form-check-label">Agree this Text</label>
    </div>
    <a href="{{route('post.index')}}" class="btn btn-warning me-5">Cancel</a>
    <button type="submit" class="btn btn-primary">Create</button>
    </form>
    </div>
@endsection





