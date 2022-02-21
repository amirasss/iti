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
    <a href="/create" class="link-danger">Add new Post</a>

<table class="table table-dark table-striped" style="width:800px;margin:auto">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>body</th>
        <th>title</th>
        <th>Show</th>
        <th>Edit</th>
        <th>Delete</th>

    </tr>
        @foreach($posts as $post)
        <tr>

            <td>{{$post['id']}}</td>
            <td>{{$post['name']}}</td>
            <td>{{$post['body']}}</td>
            <td>{{$post['title']}}</td>
            <td><a href="/show/{{$post['id']}}/{{$post['name']}}/{{$post['body']}}/{{$post['title']}}">Show</a></td>
            <td><a href="/edit/{{$post['id']}}/{{$post['name']}}/{{$post['body']}}/{{$post['title']}}">Edit</a></td>
            <td><a href="#">Delete</a></td>
        </tr>

            @endforeach
</table>
</body>
</html>
