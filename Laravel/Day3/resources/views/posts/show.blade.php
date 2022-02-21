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
    <ul class="list-group" style="width:400px;margin:auto">
        <li class="list-group-item list-group-item-danger">{{$id}}</li>
        <li class="list-group-item list-group-item-warning">{{$name}}</li>
        <li class="list-group-item list-group-item-info">{{$body}}</li>
        <li class="list-group-item list-group-item-light">{{$title}}</li>
        <li class="list-group-item list-group-item-warning">{{$created_at}}</li>
        <li class="list-group-item list-group-item-info">{{$updated_at}}</li>
      </ul>
</body>
</html>
