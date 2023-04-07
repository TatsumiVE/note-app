<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('blogs.create') }} ">Add</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
            @foreach($data as $val)
          <tr>

            <td>{{$val->id}}</td>
            <td>{{$val->name}}</td>
            <td>{{$val->description}}</td>
            <td><a href="{{route('blogs.edit',$val->id)}}">Edit</a></td>
            <td><a href="{{route('blogs.show',$val->id)}}">View</a></td>
            <td>
            <form action="{{route('blogs.destroy',$val->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
           </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</body>
</html>
