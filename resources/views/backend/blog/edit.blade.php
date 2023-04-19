@extends('backend.layout.master')
@section('content')
<div class="container">
    <h1 class="text-center text-primary">Edit Post</h1>
    {{-- @dd($data); --}}

  <form action="{{route('blogs.update',$result->id)}}" method="POST">
    @csrf
    {{method_field('PATCH')}}
    <div>
        <input type="text" name="name" id="name" class="name" value="{{$result->name}}" required/>
        <label for="name">Name</label>
    </div>
    <div>
        <input type="text" name="description" id="description" class="description" value={{$result->description}} required/>
        <label for="description">Des</label>
    </div>
    <a href="{{route('blogs.index')}}" class="btn btn-warning mt-5 mx-2">Cancel</a>
    <button type="submit" class="btn btn-secondary mt-5 mx-2">Update</button>
  </form>
      </div>

@endsection
