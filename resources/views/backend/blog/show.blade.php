@extends('backend.layout.master')
@section('content')
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>

          </tr>
        </thead>
        <tbody>

          <tr>

            <td>{{$result->id}}</td>
            <td>{{$result->name}}</td>
            <td>{{$result->description}}</td>

          </tr>

        </tbody>
      </table>
@endsection
