    @extends('backend.layout.master')
    @section('content')
    <div class="container">
        <h1 class="text-center text-primary">Create Post</h1>
  <form action="{{route('blogs.store')}}" method="POST">
    @csrf
    <div>
        <input type="text" name="name" id="name" class="name" required/>
        <label for="name">Name</label>
    </div>
    <div>
        <input type="text" name="description" id="description" class="description" required/>
        <label for="description">Des</label>
    </div>
    <a href="{{route('blogs.index')}}" class="btn btn-warning mt-5 mx-2">Cancel</a>
    <button type="submit" class="btn btn-primary mt-5 mx-2">Create</button>
  </form>

</div>

  @endsection
