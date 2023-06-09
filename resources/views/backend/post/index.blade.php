<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>

    <link href="{{asset('css/bootstrap.min.ajax.css')}}" rel="stylesheet">
</head>
<body>
    <div class="container">
    <h1 class="text-center">Post List</h1>

    <a href="{{route('post.create')}}" class="btn btn-success">Create</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">is_active</th>
            <th scope="col" colspan="3" class="text-center">Actions</th>


          </tr>
        </thead>
        <tbody>
            @forelse ($data as $val)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>ID - {{$val->id}}</td>
                <td>{{$val->title}}</td>
                <td>{{$val->description}}</td>
                <td>Status - <input type="checkbox" class="form-check-input" value="" {{($val->is_active===1)?"checked":""}} disabled/></td>
                <td><a href="{{route('post.edit',$val->id)}}" class="btn btn-primary">Edit</a></td>
                <td><a href="{{route('post.show',$val->id)}}" class="btn btn-success">View</a></td>
                <td>
                    <form action="{{route('post.destroy',$val->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        {{-- <button type="submit" class="btn btn-danger"  onclick="return confirm('are you delete?')">Delete</button> --}}

                        <button type="submit" class="btn  btn-danger btn-flat show-alert-delete-box" data-toggle="tooltip" title='Delete'>Delete</button>

                    </form>

                </td>
              </tr>
            @empty
              <div class="text-center text-primary fs-1 fw-bolder">No Recorded Datas</div>
            @endforelse()

        </tbody>
      </table>




      <div class="row mt-5">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled>
            <label class="form-label" for="flexCheckDisabled">
              unchecked checkbox
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked disabled>
            <label class="form-label" for="flexCheckCheckedDisabled">
               checked checkbox
            </label>
          </div>
    </div>


    </div>
{{--
      <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script> --}}
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
      <script type="text/javascript">
        $('.show-alert-delete-box').click(function(event){
            var form =  $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                title: "Are you sure you want to delete this record?",
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                type: "warning",
                buttons: ["Cancel","Yes!"],
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
        });
    </script>
</body>
</html>
