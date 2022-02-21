<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="">
    <table class="table table-hover">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">FirstName</th>
              <th scope="col">LastName</th>
              <th scope="col">BirthDate</th>
              <th scope="col">gender</th>
              <th scope="col">PhoneNumber</th>
              <th scope="col">email</th>
              <th scope="col">Country</th>
              <th scope="col">Show</th>
              <th scope="col">edit</th>
              <th scope="col">delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
            <tr>
              <td>{{$user->id}}</td>
              <td>{{$user->fname}}</td>
              <td>{{$user->lname}}</td>
              <td>{{$user->birthdate}}</td>
              <td>{{$user->gender}}</td>
              <td>{{$user->phone}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->subject}}</td>
              <td><a href="/posts/{{$user->id}}">Show</a></td>
              <td><a href="/posts/{{$user->id}}/edit">Edit</a></td>
              <td>Delete</td>
            </tr>
            @endforeach
          </tbody>
    </table>
</body>
</html>
