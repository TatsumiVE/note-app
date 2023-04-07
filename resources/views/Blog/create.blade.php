<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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

    <button type="submit">Submit</button>
  </form>
</body>
</html>
