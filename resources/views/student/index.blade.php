<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container" body style="background-color:powderblue;">

<h1 style="text-align:center;" class="mt-5">Book Shop Inventory System</h1>
<a href="{{route('student.create')}}" class="btn btn-primary mt-5">Create Items</a>
<table class="table mt-5">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Discription</th>
      <th scope="col">Item Count</th>
      <th scope="col">Item Price</th>
      <th scope="col">Edit</th>
      <th scope="col">DELETE</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($students as $student)

    <tr>
      <th scope="row">{{ $student->id }}</th>
      <td>{{ $student->item_name }}</td>
      <td>{{ $student->item_dis }}</td>
      <td>{{ $student->item_c }}</td>
      <td>{{ $student->price }}</td>
      <td><a class="btn btn-primary" href="{{route('student.edit',$student->id)}}">Edit</a></td>
      <td><a class="btn btn-primary" href="{{route('student.delete',$student->id)}}">DELETE</a></td>
    </tr>
    @endforeach

  </tbody>
</table>

</body>
</html>
