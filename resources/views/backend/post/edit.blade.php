<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>

</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center text-primary">Create Post</h1>
        <form action="{{route('post.update',$result->id)}}" method="POST">
            @csrf
            @method("PATCH")
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" id="exampleFormControlInput1" value="{{$result->title}}" required>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="exampleFormControlTextarea1"  rows="3" required>{{$result->description}}</textarea>
      </div>
      <div class="mb-3">
        <input class="form-check-input mt-0" type="checkbox" name="is_active" id="is_active"  {{($result->is_active===1)?"checked":""}}  aria-label="Checkbox for following text input">
        <label for="is_active" class="form-check-label">Agree this Text</label>
    </div>
    <a href="{{route('post.index')}}" class="btn btn-warning me-5">Cancel</a>
    <button type="submit" class="btn btn-primary">Update</button>
    </form>
    </div>

      <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
