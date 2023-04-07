<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center text-primary">Show Post</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID Number</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">is_active</th>

          </tr>
        </thead>
        <tbody>

          <tr>

            <td>ID - {{$result->id}}</td>
            <td>{{$result->title}}</td>
            <td>{{$result->description}}</td>
            <td>Status - <input type="checkbox" class="form-check-input"  {{($result->is_active===1)?"checked":""}} disabled/></td>
          </tr>
        </tbody>

      </table>
      <a href="{{route('post.index')}}" class="btn btn-warning me-5">Back</a>
    </div>

      <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
