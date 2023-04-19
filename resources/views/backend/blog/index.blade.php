@extends('backend.layout.master')
@section('content')

        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
                <a href="{{route('blogs.create') }} " class="btn btn-primary d-block my-2 me-0">Add</a>


                        <table id="blogs" class="table table-bordered table-hover text-center">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Desc</th>
            <th scope="col" colspan="3" >Handle Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($data as $val)
          <tr>

            <td>{{$val->id}}</td>
            <td>{{$val->name}}</td>
            <td>{{$val->description}}</td>
            <td><a href="{{route('blogs.edit',$val->id)}}" class="text-warning">Edit</a></td>
            <td><a href="{{route('blogs.show',$val->id)}}" class="text-success">View</a></td>
            <td>
            <form action="{{route('blogs.destroy',$val->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn text-danger">Delete</button>
            </form>
           </td>
          </tr>
          @endforeach
        </tbody>

      </table>
      <div class=" mt-3">
        {{$data->links()}}
    </div></div></div>
        </div>

@endsection
