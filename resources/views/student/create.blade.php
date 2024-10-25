<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container" body style="background-color:powderblue;">
    <form class="mt-5" action="{{route('student.store')}}" method="POST">
        @csrf
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

        @endif
        <h1 style="text-align:center;" class="mt-5">Items Create Page</h1>
        <div class="form-group">
          <label for="exampleInputtxt" class="mt-5">Item Name :</label>
          <input type="text" class="form-control" name="item_name" placeholder="Enter Item Name">
        </div>
        <div class="form-group">
            <label for="exampleInputtxt">Item Discription :</label>
            <input type="text" class="form-control" name="item_dis" placeholder="Enter Item Discription" required>
          </div>
          <div class="form-group">
            <label for="exampleInputtxt">Item Count :</label>
            <input type="text" class="form-control" name="item_c" placeholder="Enter Item Count" required>
          </div>
          <div class="form-group">
            <label for="exampleInputtxt">Item Price :</label>
            <input type="text" class="form-control" name="price" placeholder="Enter Item Price">
          </div>
          <div class="form-group">
            <label for="exampleInputtxt">Item Qulity :</label>
            <input type="text" class="form-control" name="stat" placeholder="Enter Item Qulity" required>
          </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
      </form>

</body>
</html>
