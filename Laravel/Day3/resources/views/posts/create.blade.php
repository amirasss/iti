<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <form action="/posts" style="width: 400px;margin:auto" method="POST">
        @csrf
        {{-- <div class="mb-3">
          <label  class="form-label">ID</label>
          <input type="text" class="form-control"  name="id" >
        </div> --}}
        <div class="mb-3">
          <label class="form-label">Name Of Course</label>
          <input type="text" class="form-control" name="name" value="{{old('name')}}" >
        </div>
        <div class="mb-3">
            <label  class="form-label">body</label>
            <input type="text" class="form-control" name="body" value="{{old('body')}}">
          </div>
          <div class="mb-3">
            <label class="form-label">title</label>
            <input type="text" class="form-control" name="title" value="{{old('title')}}">
          </div>

        <button type="submit" class="btn btn-primary">Add</button>
      </form>
      @if($errors->any())
      <div class="alert alert-danger">
          <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
       </div>
      @endif
</body>
</html>
